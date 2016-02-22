<?php 
namespace Concrete\Package\SyntaxHighlighter\Block\SyntaxHighlighter;

use \Concrete\Core\Block\BlockController;

class Controller extends BlockController {

    protected $btTable = 'btSyntaxHighlighter';
    protected $btInterfaceWidth = '600';
    protected $btInterfaceHeight = '465';

    public function getBlockTypeDescription() {
        return t("Insert an hightlighted code block.");
    }

    public function getBlockTypeName() {
        return t("Syntax Highlighter");
    }

    public function add() {
        $this->set('languages', $this->getLanguages());
    }

    public function edit() {
        $this->set('languages', $this->getLanguages());
    }

    public function getLanguages() {
        return array(
            'avisynth' => 'AviSynth',
            'bash' => 'Bash',
            'basic4gl' => 'Basic4GL',
            'bf' => 'Brainfuck',
            'blitzbasic' => 'BlitzBasic',
            'bnf' => 'bnf',
            'boo' => 'Boo',
            'c' => 'C',
            'c_mac' => 'C (Mac)',
            'caddcl' => 'CAD DCL',
            'cadlisp' => 'CAD Lisp',
            'cfdg' => 'CFDG',
            'cfm' => 'ColdFusion',
            'cil' => 'CIL',
            'cmake' => 'CMake',
            'cobol' => 'COBOL',
            'cpp' => 'C++',
            'cpp-qt' => 'C++ (QT)',
            'csharp' => 'C#',
            'css' => 'CSS',
            'd' => 'D',
            'dcs' => 'DCS',
            'delphi' => 'Delphi',
            'diff' => 'Diff',
            'div' => 'DIV',
            'dos' => 'DOS',
            'dot' => 'dot',
            'eiffel' => 'Eiffel',
            'email' => 'eMail (mbox)',
            'fo' => 'FO (abas-ERP)',
            'fortran' => 'Fortran',
            'freebasic' => 'FreeBasic',
            'genero' => 'genero',
            'gettext' => 'GNU Gettext',
            'glsl' => 'glSlang',
            'gml' => 'GML',
            'gnuplot' => 'Gnuplot',
            'groovy' => 'Groovy',
            'haskell' => 'Haskell',
            'hq9plus' => 'HQ9+',
            'html4strict' => 'HTML',
            'idl' => 'Uno Idl',
            'ini' => 'INI',
            'inno' => 'Inno',
            'intercal' => 'INTERCAL',
            'io' => 'Io',
            'java' => 'Java',
            'java5' => 'Java(TM) 2 Platform Standard Edition 5.0',
            'javascript' => 'Javascript',
            'kixtart' => 'KiXtart',
            'klonec' => 'KLone C',
            'klonecpp' => 'KLone C++',
            'latex' => 'LaTeX',
            'lisp' => 'Lisp',
            'locobasic' => 'Locomotive Basic',
            'lolcode' => 'LOLcode',
            'lotusformulas' => 'Lotus Notes @Formulas',
            'lotusscript' => 'LotusScript',
            'lscript' => 'LScript',
            'lsl2' => 'LSL2',
            'lua' => 'Lua',
            'm68k' => 'Motorola 68000 Assembler',
            'make' => 'GNU make',
            'matlab' => 'Matlab M',
            'mirc' => 'mIRC Scripting',
            'modula3' => 'Modula-3',
            'mpasm' => 'Microchip Assembler',
            'mxml' => 'MXML',
            'mysql' => 'MySQL',
            'nsis' => 'NSIS',
            'oberon2' => 'Oberon-2',
            'objc' => 'Objective-C',
            'ocaml' => 'OCaml',
            'ocaml-brief' => 'OCaml (brief)',
            'oobas' => 'OpenOffice.org Basic',
            'oracle11' => 'Oracle 11 SQL',
            'oracle8' => 'Oracle 8 SQL',
            'pascal' => 'Pascal',
            'per' => 'per',
            'perl' => 'Perl',
            'php' => 'PHP',
            'php-brief' => 'PHP (brief)',
            'pic16' => 'PIC16',
            'pixelbender' => 'Pixel Bender 1.0',
            'plsql' => 'PL/SQL',
            'povray' => 'POVRAY',
            'powershell' => 'posh',
            'progress' => 'Progress',
            'prolog' => 'Prolog',
            'properties' => 'PROPERTIES',
            'providex' => 'ProvideX',
            'python' => 'Python',
            'qbasic' => 'QBasic/QuickBASIC',
            'qbasic' => 'QBasic/QuickBASIC',
            'rails' => 'Rails',
            'rebol' => 'REBOL',
            'reg' => 'Microsoft Registry',
            'robots' => 'robots.txt',
            'ruby' => 'Ruby',
            'sas' => 'SAS',
            'scala' => 'Scala',
            'scheme' => 'Scheme',
            'scilab' => 'SciLab',
            'sdlbasic' => 'sdlBasic',
            'smalltalk' => 'Smalltalk',
            'smarty' => 'Smarty',
            'sql' => 'SQL',
            'tcl' => 'TCL',
            'teraterm' => 'Tera Term Macro',
            'text' => 'Text',
            'thinbasic' => 'thinBasic',
            'tsql' => 'T-SQL',
            'typoscript' => 'TypoScript',
            'vb' => 'Visual Basic',
            'vbnet' => 'vb.net',
            'verilog' => 'Verilog',
            'vhdl' => 'VHDL',
            'vim' => 'Vim Script',
            'visualfoxpro' => 'Visual Fox Pro',
            'visualprolog' => 'Visual Prolog',
            'whitespace' => 'Whitespace',
            'whois' => 'Whois (RPSL format)',
            'winbatch' => 'Winbatch',
            'xml' => 'XML',
            'xorg_conf' => 'Xorg configuration',
            'xpp' => 'X++',
            'z80' => 'ZiLOG Z80 Assembler');
    }

    public function view() {

        $geshi = new \GeSHi($this->code, $this->language);

        if ($this->showLineNumbers) {
            $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
        }
        $geshi->enable_strict_mode($this->strictMode);
        $geshi->set_tab_width($this->tabWidth);


        $this->set('highlightedCode', $geshi->parse_code());
    }

}