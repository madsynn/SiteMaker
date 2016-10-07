<?php


@class -a -e  BaseProduct -tag author  Product -tag class Product
@property -t string -get -set name
@method  -s -r Product
@function -p {User:objUser = null} -r object initWithUser
@endClass
