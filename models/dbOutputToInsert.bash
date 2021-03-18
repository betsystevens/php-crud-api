#!/bin/bash

## change tabs to commas
sed -E "s/$(printf '\t')/,/g" ${1} > temp
sed -E "s/^[0-9]+,//" temp 
