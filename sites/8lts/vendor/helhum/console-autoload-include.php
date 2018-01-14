<?php
if (!getenv('TYPO3_ACTIVE_FRAMEWORK_EXTENSIONS')) {
    putenv('TYPO3_ACTIVE_FRAMEWORK_EXTENSIONS=' . 'backend,core,extbase,extensionmanager,fluid,impexp,install,rte_ckeditor,scheduler');
}
