<?php

/**
 * @file index.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file LICENSE.
 *
 * @brief Wrapper for backup plugin.
 */

require_once('BackupPlugin.inc.php');
return new BackupPlugin();
