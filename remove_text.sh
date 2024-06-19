#!/bin/bash

# Loop through each file
find . -type f | while read -r file; do
	# Use sed to delete the specified text in each file
	sed -i 's|||g' "$file"
done
