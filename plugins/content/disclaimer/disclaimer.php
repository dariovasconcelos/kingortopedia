<?php
/**
 * Content plugin for show a disclaimer, adult warning, age check or something
 * similar before users can view an article.
 *
 * @version	disclaimer.php, v1.2, rev. 199, January 2013.
 * @package	Joomla
 * @subpackage	Content
 * @copyright	Copyright (C) Adonay R. M. All rights reserved.
 * @author	Adonay R. M. -> http://adonay.name/
 * @license	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
 * PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.plugin.plugin' );

class plgContentDisclaimer extends JPlugin
{
	public function onContentPrepare( $context, &$row, &$params, $limitstart = 0 )
	{
		// cargar estilos
		$doc =& JFactory::getDocument();
		$doc->addStyleSheet( "plugins/content/disclaimer/css/estilos.css" );

		// cargar jquery
		$parametros = $this->params;
		$librerias = $parametros->get ('librerias');

		if ($librerias) $doc->addScript( "plugins/content/disclaimer/js/jquery.min.js" );

		$doc->addScript( "plugins/content/disclaimer/js/scripts.js" );
	}

	public function onContentBeforeDisplay( $context, &$row, &$params )
	{
		// cargar mismo idioma que en backend
		$lang = JFactory::getLanguage();
		$lang->load('plg_content_disclaimer', JPATH_ADMINISTRATOR);

		// obtener parametros
		$parametros = $this->params;

		// internacionalizar plugin
		$aviso = JText::_('WARNING');
		$entrar = JText::_('ENTER');
		$salir = JText::_('LEAVE');

		// obtener texto de aviso
		$texto = $parametros->get ('texto');

		if (empty ($texto) || $texto == "\r\n") $texto = JText::_('DEFAULT_DISCLAIMER');

		// obtener redireccion url
		$redir = $parametros->get ('redir');

		if (empty ($redir)) $redir = 'http://adonay.name/';

		// color de fondo del popup
		$fondo = $parametros->get ('fondo');

		if (empty ($fondo) || $fondo === 0) $fondo = '#3D3D3D';

		// o color de fondo personalizado
		$micolor = $parametros->get ('micolor');

		if (!empty ($micolor)) $fondo = $micolor;

		// color del texto personalizado
		$colortexto = $parametros->get ('colortexto');

		if (empty ($colortexto)) $colortexto = '#FFFFFF';

		// alineacion del texto emergente
		$align = $parametros->get ('align');

		if (empty ($align) || $align == 0) $align = 'center';
		if ($align == 1) $align = 'justify';

		// imagen de fondo para el popup
		$imagen = $parametros->get ('imagen');

		if (empty ($imagen)) $imagen = 'url(\'plugins/content/disclaimer/images/disclaimer.png\') no-repeat scroll center center transparent';
		else $imagen = 'url(\''.$imagen.'\') no-repeat scroll center center transparent';

		// duracion de la cookie
		$duracion = $parametros->get ('duracion');

		if (empty ($duracion) || $duracion == 0) $duracion = 1;
		$llamada = 'var dias='.$duracion.';';

		$doc =& JFactory::getDocument();
		$doc->addScriptDeclaration( $llamada );

		// contenedor del html
		$contenido = '	<!--
				Content Disclaimer - Adonay http://adonay.name/ -->
				<div id="popup">
				 <div id="dialog" class="window" style="background-color: '.$fondo.';">
				  <div id="logopopup" style="background: '.$imagen.';"></div>
				  <h6 class="aviso" style="text-align: '.$align.'; color: '.$colortexto.';"><span>'.$aviso.' </span>'.$texto.'</h6>
				  <div id="botones">
				   <div><a href="#" id="mayor" class="enter readmore">'.$entrar.'</a></div>
				   <div><a href="'.$redir.'" class="exit readmore">'.$salir.'</a></div>
				  </div>
				 </div>
				 <div style="opacity: 0.9;" id="mascara"></div>
				</div>
				<!-- end Adonay http://adonay.name/ --> ';
		return $contenido;
	}
}
?>
