<?php


namespace OTP;

if (defined("\101\102\123\x50\x41\x54\x48")) {
    goto Pk;
}
exit;
Pk:
if (class_exists("\x53\160\x6c\103\x6c\x61\163\163\114\x6f\x61\x64\145\162")) {
    goto c0;
}
final class SplClassLoader
{
    private $file_extension = "\56\x70\x68\x70";
    private $namespace;
    private $include_path;
    private $namespace_separator = "\x5c";
    public function __construct($xw = null, $IB = null)
    {
        $this->namespace = $xw;
        $this->include_path = $IB;
    }
    public function register()
    {
        spl_autoload_register(array($this, "\154\x6f\x61\x64\137\x63\154\x61\163\163"));
    }
    public function unregister()
    {
        spl_autoload_unregister(array($this, "\x6c\x6f\141\144\137\x63\x6c\x61\163\163"));
    }
    public function load_class($w5)
    {
        if (!(null === $this->namespace || $this->is_same_namespace($w5))) {
            goto HQ;
        }
        $NH = '';
        $VS = '';
        $SE = strripos($w5, $this->namespace_separator);
        if (!(false !== $SE)) {
            goto XP;
        }
        $VS = strtolower(substr($w5, 0, $SE));
        $w5 = substr($w5, $SE + 1);
        $NH = str_replace($this->namespace_separator, DIRECTORY_SEPARATOR, $VS) . DIRECTORY_SEPARATOR;
        XP:
        $jU = strtolower($w5);
        $NH .= str_replace("\137", DIRECTORY_SEPARATOR, "\143\154\141\x73\x73\55" . $jU) . $this->file_extension;
        $YS = str_replace("\157\x74\160", MOV_NAME, $NH);
        if (null !== $this->include_path) {
            goto Zt;
        }
        require $YS;
        goto QM;
        Zt:
        require $this->include_path . DIRECTORY_SEPARATOR . $YS;
        QM:
        HQ:
    }
    private function is_same_namespace($w5)
    {
        return substr($w5, 0, strlen($this->namespace . $this->namespace_separator)) === $this->namespace . $this->namespace_separator;
    }
}
c0:
