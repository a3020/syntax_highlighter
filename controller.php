<?php
namespace Concrete\Package\SyntaxHighlighter;

use BlockType;
use Concrete\Core\Package\Package;

class Controller extends Package {

    protected $pkgHandle = 'syntax_highlighter';
    protected $appVersionRequired = '5.7.3';
    protected $pkgVersion = '1.0';
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;
    protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;

    public function getPackageDescription() {
        return t("Insert an hightlighted code block.");
    }

    public function getPackageName() {
        return t("Syntax Highlighter");
    }
	
	public function on_start() {
		require $this->getPackagePath() . '/vendor/autoload.php';
	}

    public function install() {
        $pkg = parent::install();

        // install block		
        BlockType::installBlockTypeFromPackage('syntax_highlighter', $pkg);
    }
}