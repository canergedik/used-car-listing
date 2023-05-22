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

/* admin/change_password.html.twig */
class __TwigTemplate_91125e8b114f2d0770a46d3294eb14f2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "common/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/change_password.html.twig"));

        $this->parent = $this->loadTemplate("common/base.html.twig", "admin/change_password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


<body class=\"vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar bg-white\" data-open=\"click\" data-menu=\"vertical-menu\" data-color=\"bg-chartbg\" data-col=\"2-columns\">

    <!-- fixed-top-->
    <nav class=\"header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light\">
      <div class=\"navbar-wrapper\">
        <div class=\"navbar-container content\">
          <div class=\"collapse navbar-collapse show\" id=\"navbar-mobile\">
            <ul class=\"nav navbar-nav mr-auto float-left\">
              <li class=\"nav-item d-block d-md-none\"><a class=\"nav-link nav-menu-main menu-toggle hidden-xs\" href=\"#\"><i class=\"ft-menu\"></i></a></li>
              <li class=\"nav-item d-none d-md-block\"><a class=\"nav-link nav-link-expand\" href=\"#\"><i class=\"ficon ft-maximize\"></i></a></li>
              <li class=\"nav-item dropdown navbar-search\"><a class=\"nav-link dropdown-toggle hide\" data-toggle=\"dropdown\" href=\"#\"><i class=\"ficon ft-search\"></i></a>
                <ul class=\"dropdown-menu\">
                  <li class=\"arrow_box\">
                    <form>
                      <div class=\"input-group search-box\">
                        <div class=\"position-relative has-icon-right full-width\">
                          <input class=\"form-control\" id=\"search\" type=\"text\" placeholder=\"Search here...\">
                          <div class=\"form-control-position navbar-search-close\"><i class=\"ft-x\">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class=\"nav navbar-nav float-right\">         
              <li class=\"dropdown dropdown-language nav-item\"><a class=\"dropdown-toggle nav-link\" id=\"dropdown-flag\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"flag-icon flag-icon-us\"></i><span class=\"selected-language\"></span></a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-flag\">
                  <div class=\"arrow_box\"><a class=\"dropdown-item\" href=\"#\"><i class=\"flag-icon flag-icon-us\"></i> English</a><a class=\"dropdown-item\" href=\"#\"><i class=\"flag-icon flag-icon-cn\"></i> Chinese</a><a class=\"dropdown-item\" href=\"#\"><i class=\"flag-icon flag-icon-ru\"></i> Russian</a><a class=\"dropdown-item\" href=\"#\"><i class=\"flag-icon flag-icon-fr\"></i> French</a><a class=\"dropdown-item\" href=\"#\"><i class=\"flag-icon flag-icon-es\"></i> Spanish</a></div>
                </div>
              </li>
            </ul>
            <ul class=\"nav navbar-nav float-right\">
              <li class=\"dropdown dropdown-notification nav-item\"><a class=\"nav-link nav-link-label\" href=\"#\" data-toggle=\"dropdown\"><i class=\"ficon ft-mail\">             </i></a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <div class=\"arrow_box_right\"><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-book\"></i> Read Mail</a><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-bookmark\"></i> Read Later</a><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-check-square\"></i> Mark all Read       </a></div>
                </div>
              </li>
              <li class=\"dropdown dropdown-user nav-item\"><a class=\"dropdown-toggle nav-link dropdown-user-link\" href=\"#\" data-toggle=\"dropdown\">             <span class=\"avatar avatar-online\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("panel/theme-assets/images/portrait/small/avatar-s-19.png"), "html", null, true);
        echo "\" alt=\"avatar\"><i></i></span></a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <div class=\"arrow_box_right\"><a class=\"dropdown-item\" href=\"#\"><span class=\"avatar avatar-online\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("panel/theme-assets/images/portrait/small/avatar-s-19.png"), "html", null, true);
        echo "\" alt=\"avatar\"><span class=\"user-name text-bold-700 ml-1\">John Doe</span></span></a>
                    <div class=\"dropdown-divider\"></div><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-user\"></i> Edit Profile</a><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-mail\"></i> My Inbox</a><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-check-square\"></i> Task</a><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-message-square\"></i> Chats</a>
                    <div class=\"dropdown-divider\"></div><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-power\"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class=\"w-100 d-flex justify-content-center\">
   ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_start', ["attr" => ["class" => "w-50 pt-5", "id" => "change_password"]]);
        echo "
        <div class=\"form-group w-100\">
            <label class=\"text-success\" for=\"exampleInputEmail1\">password</label>
           ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "password", [], "any", false, false, false, 63), 'widget');
        echo "
        </div>
   ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
</div>



     
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 65,  129 => 63,  123 => 60,  107 => 47,  102 => 45,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'common/base.html.twig' %}

{% block body %}



<body class=\"vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar bg-white\" data-open=\"click\" data-menu=\"vertical-menu\" data-color=\"bg-chartbg\" data-col=\"2-columns\">

    <!-- fixed-top-->
    <nav class=\"header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light\">
      <div class=\"navbar-wrapper\">
        <div class=\"navbar-container content\">
          <div class=\"collapse navbar-collapse show\" id=\"navbar-mobile\">
            <ul class=\"nav navbar-nav mr-auto float-left\">
              <li class=\"nav-item d-block d-md-none\"><a class=\"nav-link nav-menu-main menu-toggle hidden-xs\" href=\"#\"><i class=\"ft-menu\"></i></a></li>
              <li class=\"nav-item d-none d-md-block\"><a class=\"nav-link nav-link-expand\" href=\"#\"><i class=\"ficon ft-maximize\"></i></a></li>
              <li class=\"nav-item dropdown navbar-search\"><a class=\"nav-link dropdown-toggle hide\" data-toggle=\"dropdown\" href=\"#\"><i class=\"ficon ft-search\"></i></a>
                <ul class=\"dropdown-menu\">
                  <li class=\"arrow_box\">
                    <form>
                      <div class=\"input-group search-box\">
                        <div class=\"position-relative has-icon-right full-width\">
                          <input class=\"form-control\" id=\"search\" type=\"text\" placeholder=\"Search here...\">
                          <div class=\"form-control-position navbar-search-close\"><i class=\"ft-x\">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class=\"nav navbar-nav float-right\">         
              <li class=\"dropdown dropdown-language nav-item\"><a class=\"dropdown-toggle nav-link\" id=\"dropdown-flag\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"flag-icon flag-icon-us\"></i><span class=\"selected-language\"></span></a>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-flag\">
                  <div class=\"arrow_box\"><a class=\"dropdown-item\" href=\"#\"><i class=\"flag-icon flag-icon-us\"></i> English</a><a class=\"dropdown-item\" href=\"#\"><i class=\"flag-icon flag-icon-cn\"></i> Chinese</a><a class=\"dropdown-item\" href=\"#\"><i class=\"flag-icon flag-icon-ru\"></i> Russian</a><a class=\"dropdown-item\" href=\"#\"><i class=\"flag-icon flag-icon-fr\"></i> French</a><a class=\"dropdown-item\" href=\"#\"><i class=\"flag-icon flag-icon-es\"></i> Spanish</a></div>
                </div>
              </li>
            </ul>
            <ul class=\"nav navbar-nav float-right\">
              <li class=\"dropdown dropdown-notification nav-item\"><a class=\"nav-link nav-link-label\" href=\"#\" data-toggle=\"dropdown\"><i class=\"ficon ft-mail\">             </i></a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <div class=\"arrow_box_right\"><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-book\"></i> Read Mail</a><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-bookmark\"></i> Read Later</a><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-check-square\"></i> Mark all Read       </a></div>
                </div>
              </li>
              <li class=\"dropdown dropdown-user nav-item\"><a class=\"dropdown-toggle nav-link dropdown-user-link\" href=\"#\" data-toggle=\"dropdown\">             <span class=\"avatar avatar-online\"><img src=\"{{asset('panel/theme-assets/images/portrait/small/avatar-s-19.png')}}\" alt=\"avatar\"><i></i></span></a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <div class=\"arrow_box_right\"><a class=\"dropdown-item\" href=\"#\"><span class=\"avatar avatar-online\"><img src=\"{{asset('panel/theme-assets/images/portrait/small/avatar-s-19.png')}}\" alt=\"avatar\"><span class=\"user-name text-bold-700 ml-1\">John Doe</span></span></a>
                    <div class=\"dropdown-divider\"></div><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-user\"></i> Edit Profile</a><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-mail\"></i> My Inbox</a><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-check-square\"></i> Task</a><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-message-square\"></i> Chats</a>
                    <div class=\"dropdown-divider\"></div><a class=\"dropdown-item\" href=\"#\"><i class=\"ft-power\"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class=\"w-100 d-flex justify-content-center\">
   {{ form_start(form, {'attr': {'class': 'w-50 pt-5','id':'change_password'}}) }}
        <div class=\"form-group w-100\">
            <label class=\"text-success\" for=\"exampleInputEmail1\">password</label>
           {{ form_widget(form.password ) }}
        </div>
   {{form_end(form)}}
</div>



     
{% endblock %}

", "admin/change_password.html.twig", "C:\\xampp\\htdocs\\used-cars-listing-demo\\templates\\admin\\change_password.html.twig");
    }
}
