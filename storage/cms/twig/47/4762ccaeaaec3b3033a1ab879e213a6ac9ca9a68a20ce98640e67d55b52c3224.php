<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\xiso/plugins/xiso/homepage/components/setting/default.htm */
class __TwigTemplate_0720c7c0c8b4721d74512b1f56a3e3c7efa2753ff1d955a25700db662c21b1ed extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "default.htm";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/plugins/xiso/homepage/components/setting/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("default.htm", "C:\\xampp\\htdocs\\xiso/plugins/xiso/homepage/components/setting/default.htm", "");
    }
}
