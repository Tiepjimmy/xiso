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

/* C:\xampp\htdocs\xiso/themes/xiso/partials/site/sidebar-signup.htm */
class __TwigTemplate_52c6236dc0ddd5d2454cdf927ca32dc6295ff0f0c5cf5247dd6e79603e89423a extends \Twig\Template
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
        echo "<div class=\"sidebar-signup\" id=\"test\">
    <div class=\"wrap-side-signup\">
        <h2 class=\"title-header-signup\">Đăng ký nhận tư vấn</h2>
        <p class=\"text\">
            Mời bạn hoàn thiện form thông tin bên dưới để được trường học trực tuyến XiSo hỗ trợ cho bạn đầy đủ nhất.
            <span>*Bắt buộc</span>
        </p>
        <form data-request=\"onCreateData\"  class=\"frm-signup frm-validate\">
            <div class=\"form-group\">
                <label for=\"f_name\">Họ tên <span>*</span></label>
                <input type=\"text\" id=\"f_name\" name=\"name\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label for=\"f_email\">Email</label>
                <input type=\"email\" id=\"f_email\" name=\"email\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label for=\"f_phone\">Số điện thoại <span>*</span></label>
                <input type=\"number\" maxlength=\"10\" id=\"f_phone\" name=\"phone\" class=\"form-control\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"f_year\">Chọn năm sinh <span>*</span></label>
                <select id=\"f_year\" name=\"year\" class=\"f_s_year\" required>
                    <option></option>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["neworder"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["array"]) {
            // line 26
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["array"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["array"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['array'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"f_country\">Thành phố</label>
                <input type=\"text\" id=\"f_country\" name=\"city\" class=\"form-control\">
            </div>
            <div class=\"form-group pt-15 pb-10\">
                <label for=\"f_note\" class=\"sr-only\"></label>
                <textarea id=\"f_note\" name=\"content\" class=\"form-control f_note\" rows=\"4\"
                placeholder=\"Thông tin bổ sung để XiSo liên hệ, ghi chú\"></textarea>
            </div>
            <button class=\"btn-gnl-orange btn-signup-now\" type=\"submit\">
                Đăng ký ngay
            </button>
            <p class=\"text text-center\">
                Bằng việc đăng kí, bạn đồng ý để XiSo liên hệ thông qua các thông tin liên hệ. XiSo cam kết bảo mật thông tin
                cho bạn, tuyệt đối không cung cấp cho đơn vị khác
            </p>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/sidebar-signup.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  67 => 26,  63 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar-signup\" id=\"test\">
    <div class=\"wrap-side-signup\">
        <h2 class=\"title-header-signup\">Đăng ký nhận tư vấn</h2>
        <p class=\"text\">
            Mời bạn hoàn thiện form thông tin bên dưới để được trường học trực tuyến XiSo hỗ trợ cho bạn đầy đủ nhất.
            <span>*Bắt buộc</span>
        </p>
        <form data-request=\"onCreateData\"  class=\"frm-signup frm-validate\">
            <div class=\"form-group\">
                <label for=\"f_name\">Họ tên <span>*</span></label>
                <input type=\"text\" id=\"f_name\" name=\"name\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label for=\"f_email\">Email</label>
                <input type=\"email\" id=\"f_email\" name=\"email\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label for=\"f_phone\">Số điện thoại <span>*</span></label>
                <input type=\"number\" maxlength=\"10\" id=\"f_phone\" name=\"phone\" class=\"form-control\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"f_year\">Chọn năm sinh <span>*</span></label>
                <select id=\"f_year\" name=\"year\" class=\"f_s_year\" required>
                    <option></option>
                    {%for key, array in neworder %}
                    <option value=\"{{ array }}\"> {{ array }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"f_country\">Thành phố</label>
                <input type=\"text\" id=\"f_country\" name=\"city\" class=\"form-control\">
            </div>
            <div class=\"form-group pt-15 pb-10\">
                <label for=\"f_note\" class=\"sr-only\"></label>
                <textarea id=\"f_note\" name=\"content\" class=\"form-control f_note\" rows=\"4\"
                placeholder=\"Thông tin bổ sung để XiSo liên hệ, ghi chú\"></textarea>
            </div>
            <button class=\"btn-gnl-orange btn-signup-now\" type=\"submit\">
                Đăng ký ngay
            </button>
            <p class=\"text text-center\">
                Bằng việc đăng kí, bạn đồng ý để XiSo liên hệ thông qua các thông tin liên hệ. XiSo cam kết bảo mật thông tin
                cho bạn, tuyệt đối không cung cấp cho đơn vị khác
            </p>
        </form>
    </div>
</div>", "C:\\xampp\\htdocs\\xiso/themes/xiso/partials/site/sidebar-signup.htm", "");
    }
}
