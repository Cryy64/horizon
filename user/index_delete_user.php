<?php

require('database.php');

require('../navbar.php');

require('model_delete_user.php');

require('view_delete_user.php');

HEADER('refresh:5;url=index_user.php');