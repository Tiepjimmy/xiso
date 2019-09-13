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

/* C:\xampp\htdocs\xiso/themes/xiso/partials/site/menu.htm */
class __TwigTemplate_5a81747adfc91fdd24a90d36eda859ba99690aadf361c8a326d2fe808ce00ecf extends \Twig\Template
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
        echo "<div id=\"js_main-menu\">
                        <ul class=\"list-main-menu\" id=\"js_list-main-menu\">
                            <li class=\"menu-item has-submenu active\">
                                <a href=\"#\" class=\"menu-link\" title=\"Trang chủ\">
                                    <span class=\"dropdown-toggle\">Chương trình học</span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item has-submenu\">
                                        <a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuongtrinhhoc");
        echo "\" class=\"menu-link\" title=\"\">
                                            <span>Chương trình đào tạo</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuongtrinhhoc");
        echo "\" class=\"menu-link\" title=\"\">
                                            <span>Đai trắng</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => "dai-vang"]);
        echo "\" class=\"menu-link\" title=\"\">
                                            <span>Đai vàng</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => "dai-xanh-la-cay"]);
        echo "\" class=\"menu-link\" title=\"\">
                                            <span>Đai xanh lá cây</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => "dai-xanh-da-troi"]);
        echo "\" class=\"menu-link\" title=\"\">
                                            <span>Đai xanh da trời</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => "dai-do"]);
        echo "\" class=\"menu-link\" title=\"\">
                                            <span>Đai đỏ</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("chuong-trinh-hoc", ["slug" => "dai-den"]);
        echo "\" class=\"menu-link\" title=\"\">
                                            <span>Đai đen</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-item has-submenu\">
                                <a href=\"#\" class=\"menu-link\" title=\"Giới thiệu\">
                                    <span class=\"dropdown-toggle\">Học phí</span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item\">
                                        <a href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hoc-phi");
        echo "\" class=\"menu-link\" title=\"\">
                                            <span>Bảng học phí</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hoc-bong");
        echo "\" class=\"menu-link\" title=\"\">
                                            <span>Học bổng / Khuyến học</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cach-hoc");
        echo "\" class=\"menu-link\" title=\"Món ăn\">
                                    <span>Cách học</span>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("mentor");
        echo "\" class=\"menu-link has-arrow\" title=\"Thực đơn nổi bật\">
                                    <span>Mentor tiêu biểu</span>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"#\" class=\"menu-link\" title=\"Tin tức\">
                                    <span>Vào lớp học</span>
                                </a>
                            </li>
                            <li class=\"menu-item has-submenu\">
                                <a href=\"#\" class=\"menu-link\" title=\"Liên hệ\">
                                    <span class=\"dropdown-toggle\">Giới thiệu</span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item\">
                                        <a href=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gioi-thieu", ["slug" => "ve-xiso"]);
        echo "\" class=\"menu-link\" title=\"\">
                                            <span>Về chúng tôi</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gioi-thieu", ["slug" => "hop-tac-hocmai-funix"]);
        echo "\" class=\"menu-link\" title=\"\">
                                            <span>Hợp tác HOCMAI - FUNiX</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-item d-lg-none d-block\">
                                <a href=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("hoidap");
        echo "\" title=\"QA\">Hỏi đáp</a>
                            </li>
                        </ul>
                    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 95,  162 => 88,  154 => 83,  136 => 68,  128 => 63,  118 => 56,  110 => 51,  95 => 39,  87 => 34,  79 => 29,  71 => 24,  63 => 19,  55 => 14,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"js_main-menu\">
                        <ul class=\"list-main-menu\" id=\"js_list-main-menu\">
                            <li class=\"menu-item has-submenu active\">
                                <a href=\"#\" class=\"menu-link\" title=\"Trang chủ\">
                                    <span class=\"dropdown-toggle\">Chương trình học</span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item has-submenu\">
                                        <a href=\"{{'chuongtrinhhoc'|page}}\" class=\"menu-link\" title=\"\">
                                            <span>Chương trình đào tạo</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"{{ 'chuongtrinhhoc'|page}}\" class=\"menu-link\" title=\"\">
                                            <span>Đai trắng</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"{{ 'chuong-trinh-hoc'|page({slug:'dai-vang'})}}\" class=\"menu-link\" title=\"\">
                                            <span>Đai vàng</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"{{ 'chuong-trinh-hoc'|page({slug:'dai-xanh-la-cay'})}}\" class=\"menu-link\" title=\"\">
                                            <span>Đai xanh lá cây</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"{{ 'chuong-trinh-hoc'|page({slug:'dai-xanh-da-troi'})}}\" class=\"menu-link\" title=\"\">
                                            <span>Đai xanh da trời</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"{{ 'chuong-trinh-hoc'|page({slug:'dai-do'})}}\" class=\"menu-link\" title=\"\">
                                            <span>Đai đỏ</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"{{ 'chuong-trinh-hoc'|page({slug:'dai-den'})}}\" class=\"menu-link\" title=\"\">
                                            <span>Đai đen</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-item has-submenu\">
                                <a href=\"#\" class=\"menu-link\" title=\"Giới thiệu\">
                                    <span class=\"dropdown-toggle\">Học phí</span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item\">
                                        <a href=\"{{ 'hoc-phi'|page}}\" class=\"menu-link\" title=\"\">
                                            <span>Bảng học phí</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"{{ 'hoc-bong'|page}}\" class=\"menu-link\" title=\"\">
                                            <span>Học bổng / Khuyến học</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"{{'cach-hoc'|page }}\" class=\"menu-link\" title=\"Món ăn\">
                                    <span>Cách học</span>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"{{'mentor'|page }}\" class=\"menu-link has-arrow\" title=\"Thực đơn nổi bật\">
                                    <span>Mentor tiêu biểu</span>
                                </a>
                            </li>
                            <li class=\"menu-item\">
                                <a href=\"#\" class=\"menu-link\" title=\"Tin tức\">
                                    <span>Vào lớp học</span>
                                </a>
                            </li>
                            <li class=\"menu-item has-submenu\">
                                <a href=\"#\" class=\"menu-link\" title=\"Liên hệ\">
                                    <span class=\"dropdown-toggle\">Giới thiệu</span>
                                </a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item\">
                                        <a href=\"{{ 'gioi-thieu'|page({slug:'ve-xiso'})}}\" class=\"menu-link\" title=\"\">
                                            <span>Về chúng tôi</span>
                                        </a>
                                    </li>
                                    <li class=\"menu-item\">
                                        <a href=\"{{ 'gioi-thieu'|page({slug:'hop-tac-hocmai-funix'})}}\" class=\"menu-link\" title=\"\">
                                            <span>Hợp tác HOCMAI - FUNiX</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"menu-item d-lg-none d-block\">
                                <a href=\"{{'hoidap'|page }}\" title=\"QA\">Hỏi đáp</a>
                            </li>
                        </ul>
                    </div>", "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/menu.htm", "");
    }
}
