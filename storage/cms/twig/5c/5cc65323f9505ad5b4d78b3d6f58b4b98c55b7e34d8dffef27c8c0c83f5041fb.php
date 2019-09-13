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

/* C:\xampp\htdocs\xiso/themes/xiso/layouts/homepage.htm */
class __TwigTemplate_9d328d5b6e13bf11cd4becd999f9bfb91aea18a41ded4a624f6542a340ba281f extends \Twig\Template
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
        echo "<!DOCTYPE html>

<html lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <title>XiSo Lập trình online - lập trình online - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\">
    <!--Page title-->
    <meta name=\"robots\" content=\"index, follow\"/>
    <meta name=\"generator\" content=\"XiSo Lập trình online - Kiến tạo tương lai\"/>
    <link rel=\"canonical\" href=\"/\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"keywords\" content=\"XiSo Lập trình online - Kiến tạo tương lai\">

    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"XiSo Lập trình online - Kiến tạo tương lai\"/>
    <meta property=\"og:description\" content=\"XiSo Lập trình online - Kiến tạo tương lai\"/>
    <meta property=\"og:site_name\" content=\"XiSo Lập trình online - Kiến tạo tương lai\"/>
    <meta property=\"og:locale\" content=\"vi_VN\">
    <meta name=\"google-site-verification\" content=\"\"/>
    <!-- All css here-->
    <!--build:css css/main.min.css-->
    <!-- plugins css-->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/plugins/bootstrap.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/plugins/animate.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/plugins/owl.carousel.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/plugins/jquery.mmenu.all.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/ionicons.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/styles.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/mystyle.css");
        echo "\">




    ";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 42
        echo "</head>
<body>
<div id=\"lds-page\" class=\"lds-css lds-center\">
    <div id=\"loader\">
        <div class=\"lds-spinner\">
            <img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/loading.gif");
        echo "\" alt=\"Loading\">
        </div>
    </div>
</div>
<div class=\"page-panel\">
    <!-- Header -->
    <header id=\"layout-header\">
        ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "    </header>

    <!-- Content -->
    <section id=\"layout-content\">
        ";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 60
        echo "    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        ";
        // line 64
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "    </footer>
</div>
    <!-- Scripts -->
    <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.3.1.min.js");
        echo "\"></script>
    <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
    <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.validate.min.js");
        echo "\"></script>
    <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.mmenu.all.js");
        echo "\"></script>
    <script src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>
    <script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/homepage.js");
        echo "\"></script>    
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-133203167-1\"></script>
    ";
        // line 78
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 79
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 80
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/layouts/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 80,  210 => 79,  199 => 78,  194 => 76,  190 => 75,  186 => 74,  182 => 73,  178 => 72,  174 => 71,  170 => 70,  166 => 69,  162 => 68,  157 => 65,  153 => 64,  147 => 60,  145 => 59,  139 => 55,  135 => 54,  125 => 47,  118 => 42,  115 => 41,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  79 => 29,  59 => 12,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <title>XiSo Lập trình online - lập trình online - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ 'assets/img/favicon.ico'|theme}}\">
    <!--Page title-->
    <meta name=\"robots\" content=\"index, follow\"/>
    <meta name=\"generator\" content=\"XiSo Lập trình online - Kiến tạo tương lai\"/>
    <link rel=\"canonical\" href=\"/\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"keywords\" content=\"XiSo Lập trình online - Kiến tạo tương lai\">

    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:title\" content=\"XiSo Lập trình online - Kiến tạo tương lai\"/>
    <meta property=\"og:description\" content=\"XiSo Lập trình online - Kiến tạo tương lai\"/>
    <meta property=\"og:site_name\" content=\"XiSo Lập trình online - Kiến tạo tương lai\"/>
    <meta property=\"og:locale\" content=\"vi_VN\">
    <meta name=\"google-site-verification\" content=\"\"/>
    <!-- All css here-->
    <!--build:css css/main.min.css-->
    <!-- plugins css-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/plugins/bootstrap.min.css' |theme}}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/plugins/animate.css' |theme}}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/plugins/owl.carousel.min.css' |theme}}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/plugins/jquery.mmenu.all.css' |theme}}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/font-awesome.min.css' |theme}}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/ionicons.min.css' |theme}}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/styles.css' |theme}}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/mystyle.css' |theme}}\">




    {% styles %}
</head>
<body>
<div id=\"lds-page\" class=\"lds-css lds-center\">
    <div id=\"loader\">
        <div class=\"lds-spinner\">
            <img src=\"{{ 'assets/img/loading.gif'|theme}}\" alt=\"Loading\">
        </div>
    </div>
</div>
<div class=\"page-panel\">
    <!-- Header -->
    <header id=\"layout-header\">
        {% partial 'site/header' %}
    </header>

    <!-- Content -->
    <section id=\"layout-content\">
        {% page %}
    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
        {% partial 'site/footer' %}
    </footer>
</div>
    <!-- Scripts -->
    <script src=\"{{ 'assets/js/jquery-3.3.1.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/popper.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.validate.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.mmenu.all.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/homepage.js'|theme }}\"></script>    
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-133203167-1\"></script>
    {% framework extras %}
    {% scripts %}

</body>
</html>", "C:\\xampp\\htdocs\\xiso/themes/xiso/layouts/homepage.htm", "");
    }
}
