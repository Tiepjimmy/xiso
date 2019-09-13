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

/* C:\xampp\htdocs\xiso/themes/xiso/pages/registration.htm */
class __TwigTemplate_73b0506d030f9dc24031a50641ddc77576228222f2962daac34cc481caeaa121 extends \Twig\Template
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
        echo "<div class=\"page-content animated fadeInRight\">
    <div class=\"wrap-text-page text-center\">
        <div class=\"container\">
            <div class=\"text-bottom\">
                <img src=\"img/user.png\" alt=\"\">
                <span>Là học sinh muốn học lập trình nhưng không có tiền</span>
            </div>
        </div>
    </div>

    <!--Registration form start-->
    <div class=\"registration-form\" id=\"test\">
        <div class=\"container\">
            <div class=\"wrap-registration-form\">
                <div class=\"bg__left\">
                    <div class=\"bg__right\">
                        <form data-request=\"onCreateData\"  class=\"frm-registration frm-validate\">
                            <div class=\"row\">
                                <div class=\"col-lg-5\">
                                    <div class=\"text-registration\">
                                        <h1 class=\"title-inner\">Đăng ký nhận tư vấn</h1>
                                        <p class=\"text\">
                                            Mời bạn hoàn thiện form thông tin bên dưới để được trường học lập trình
                                            trực tuyến XiSo hỗ trợ và giải đáp cho bạn mọi thắc mắc.
                                            <span>*Bắt buộc</span>
                                        </p>
                                        <img src=\"img/regis.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-lg-7\">
                                    <div class=\"form-registration-right\">
                                        <div class=\"form-group row\">
                                            <label for=\"f_name\" class=\"col-md-4\">Họ tên <span>*</span></label>
                                            <div class=\"col-md-8\">
                                                <input type=\"text\" id=\"f_name\" name=\"name\"
                                                placeholder=\"Nhập họ tên\"
                                                class=\"form-control\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label for=\"f_email\" class=\"col-md-4\">Email</label>
                                            <div class=\"col-md-8\">
                                                <input type=\"email\" id=\"f_email\" name=\"email\"
                                                placeholder=\"Nhập email\" class=\"form-control\">
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label for=\"f_phone\" class=\"col-md-4\">Số điện thoại
                                                <span>*</span></label>
                                                <div class=\"col-md-8\">
                                                    <input type=\"number\" maxlength=\"10\" id=\"f_phone\" name=\"phone\"
                                                    placeholder=\"Nhập số điện thoại\" class=\"form-control\"
                                                    required>
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"f_year\" class=\"col-md-4\">Chọn năm sinh
                                                    <span>*</span></label>
                                                    <div class=\"col-md-8\">
                                                        <select id=\"f_year\" name=\"year\" class=\"f_s_year\" required>
                                                            <option></option>  
                                                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["neworder"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["array"]) {
            // line 63
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, $context["array"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["array"], "html", null, true);
            echo "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['array'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                                         
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row\">
                                                    <label for=\"f_country\" class=\"col-md-4\">Thành phố</label>
                                                    <div class=\"col-md-8\">
                                                        <input type=\"text\" id=\"f_country\" name=\"city\"
                                                        placeholder=\"Nhập thành phố\" class=\"form-control\">
                                                    </div>
                                                </div>
                                                <div class=\"form-group pt-15 pb-10 row\">
                                                    <label for=\"f_note\" class=\"col-md-4\">Bổ sung lời nhắn</label>
                                                    <div class=\"col-md-8\">
                                                        <textarea id=\"f_note\" name=\"content\" class=\"form-control f_note\" rows=\"4\"
                                                        placeholder=\"Thông tin bổ sung để XiSo liên hệ, ghi chú\"></textarea>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-md-8 offset-md-4\">
                                                        <button class=\"btn-gnl-orange btn-signup-now\" id=\"confirm\" type=\"submit\">
                                                            Đăng ký ngay
                                                        </button>
                                                        <p class=\"text\">
                                                            Bằng việc đăng kí, bạn đồng ý để XiSo liên hệ thông qua các
                                                            thông tin liên hệ. XiSo cam kết bảo mật thông tin
                                                            cho bạn, tuyệt đối không cung cấp cho đơn vị khác
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Registration form end-->
        </div>


<div class=\"modal popup-signup-success popup-common\" id=\"js_popup_signup_success\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Thông tin của bạn đã được gửi thành công!</h4>
                <span class=\"icon\"><i class=\"ion ion-md-checkmark-circle\"></i></span>
            </div>
            <div class=\"modal-body text-center\">
                <div class=\"text pb-30\">
                    <p>
                        XiSo sẽ liên hệ lại với bạn trong vòng 24h qua số điện thoại 098-165-8329
                    </p>
                    <p>
                        Bạn chú ý điện thoại và email thường xuyên để tránh bỏ lỡ các thông tin quan trọng về việc học tập
                        của con!
                    </p>
                </div>
                <div class=\"button-option mb-15\">
                    <a href=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\" class=\"btn-general mr-5 btn-backhome\">Trở về trang chủ</a>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\xiso/themes/xiso/pages/registration.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 126,  115 => 65,  104 => 63,  100 => 62,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"page-content animated fadeInRight\">
    <div class=\"wrap-text-page text-center\">
        <div class=\"container\">
            <div class=\"text-bottom\">
                <img src=\"img/user.png\" alt=\"\">
                <span>Là học sinh muốn học lập trình nhưng không có tiền</span>
            </div>
        </div>
    </div>

    <!--Registration form start-->
    <div class=\"registration-form\" id=\"test\">
        <div class=\"container\">
            <div class=\"wrap-registration-form\">
                <div class=\"bg__left\">
                    <div class=\"bg__right\">
                        <form data-request=\"onCreateData\"  class=\"frm-registration frm-validate\">
                            <div class=\"row\">
                                <div class=\"col-lg-5\">
                                    <div class=\"text-registration\">
                                        <h1 class=\"title-inner\">Đăng ký nhận tư vấn</h1>
                                        <p class=\"text\">
                                            Mời bạn hoàn thiện form thông tin bên dưới để được trường học lập trình
                                            trực tuyến XiSo hỗ trợ và giải đáp cho bạn mọi thắc mắc.
                                            <span>*Bắt buộc</span>
                                        </p>
                                        <img src=\"img/regis.png\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"col-lg-7\">
                                    <div class=\"form-registration-right\">
                                        <div class=\"form-group row\">
                                            <label for=\"f_name\" class=\"col-md-4\">Họ tên <span>*</span></label>
                                            <div class=\"col-md-8\">
                                                <input type=\"text\" id=\"f_name\" name=\"name\"
                                                placeholder=\"Nhập họ tên\"
                                                class=\"form-control\" required>
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label for=\"f_email\" class=\"col-md-4\">Email</label>
                                            <div class=\"col-md-8\">
                                                <input type=\"email\" id=\"f_email\" name=\"email\"
                                                placeholder=\"Nhập email\" class=\"form-control\">
                                            </div>
                                        </div>
                                        <div class=\"form-group row\">
                                            <label for=\"f_phone\" class=\"col-md-4\">Số điện thoại
                                                <span>*</span></label>
                                                <div class=\"col-md-8\">
                                                    <input type=\"number\" maxlength=\"10\" id=\"f_phone\" name=\"phone\"
                                                    placeholder=\"Nhập số điện thoại\" class=\"form-control\"
                                                    required>
                                                </div>
                                            </div>
                                            <div class=\"form-group row\">
                                                <label for=\"f_year\" class=\"col-md-4\">Chọn năm sinh
                                                    <span>*</span></label>
                                                    <div class=\"col-md-8\">
                                                        <select id=\"f_year\" name=\"year\" class=\"f_s_year\" required>
                                                            <option></option>  
                                                            {%for key,array in neworder%}
                                                                <option value=\"{{ array }}\"> {{ array }}</option>
                                                            {% endfor %}
                                                         
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group row\">
                                                    <label for=\"f_country\" class=\"col-md-4\">Thành phố</label>
                                                    <div class=\"col-md-8\">
                                                        <input type=\"text\" id=\"f_country\" name=\"city\"
                                                        placeholder=\"Nhập thành phố\" class=\"form-control\">
                                                    </div>
                                                </div>
                                                <div class=\"form-group pt-15 pb-10 row\">
                                                    <label for=\"f_note\" class=\"col-md-4\">Bổ sung lời nhắn</label>
                                                    <div class=\"col-md-8\">
                                                        <textarea id=\"f_note\" name=\"content\" class=\"form-control f_note\" rows=\"4\"
                                                        placeholder=\"Thông tin bổ sung để XiSo liên hệ, ghi chú\"></textarea>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-md-8 offset-md-4\">
                                                        <button class=\"btn-gnl-orange btn-signup-now\" id=\"confirm\" type=\"submit\">
                                                            Đăng ký ngay
                                                        </button>
                                                        <p class=\"text\">
                                                            Bằng việc đăng kí, bạn đồng ý để XiSo liên hệ thông qua các
                                                            thông tin liên hệ. XiSo cam kết bảo mật thông tin
                                                            cho bạn, tuyệt đối không cung cấp cho đơn vị khác
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Registration form end-->
        </div>


<div class=\"modal popup-signup-success popup-common\" id=\"js_popup_signup_success\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Thông tin của bạn đã được gửi thành công!</h4>
                <span class=\"icon\"><i class=\"ion ion-md-checkmark-circle\"></i></span>
            </div>
            <div class=\"modal-body text-center\">
                <div class=\"text pb-30\">
                    <p>
                        XiSo sẽ liên hệ lại với bạn trong vòng 24h qua số điện thoại 098-165-8329
                    </p>
                    <p>
                        Bạn chú ý điện thoại và email thường xuyên để tránh bỏ lỡ các thông tin quan trọng về việc học tập
                        của con!
                    </p>
                </div>
                <div class=\"button-option mb-15\">
                    <a href=\"{{ 'homepage'|page}}\" class=\"btn-general mr-5 btn-backhome\">Trở về trang chủ</a>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\xiso/themes/xiso/pages/registration.htm", "");
    }
}
