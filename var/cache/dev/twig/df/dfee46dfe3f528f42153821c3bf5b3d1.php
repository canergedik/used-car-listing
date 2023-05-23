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

/* admin/remove-datas.html.twig */
class __TwigTemplate_c8b4c4ab0c794487b5562cdc02f6ad2a extends \Twig\Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/remove-datas.html.twig"));

        $this->parent = $this->loadTemplate("common/base.html.twig", "admin/remove-datas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

   <nav class=\"header-navbar bg-dark navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light\">
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
                          <input class=\"form-control\" id=\"edit-search\" type=\"text\" placeholder=\"Search here...\">
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
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("panel/theme-assets/images/portrait/small/avatar-s-19.png"), "html", null, true);
        echo "\" alt=\"avatar\"><i></i></span></a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <div class=\"arrow_box_right\"><a class=\"dropdown-item\" href=\"#\"><span class=\"avatar avatar-online\"><img src=\"";
        // line 44
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
    <div class=\"container mt-5 p-5\">
       <div class=\"float-right mb-2 text-light font-bold\t\">
          ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "get", [0 => "page", 1 => 1], "method", false, false, false, 57), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["totalPage"]) || array_key_exists("totalPage", $context) ? $context["totalPage"] : (function () { throw new RuntimeError('Variable "totalPage" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "
       </div>
        
        <table class=\"table table-dark border-1\">
              <thead>
                  <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Screen_name</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Edıt</th>
                  </tr>
              </thead>
              <tbody>
                  ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 71
            echo "                      <tr>
                          <th scope=\"row\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id_str", [], "any", false, false, false, 72), "html", null, true);
            echo "</th>
                          <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "screen_name", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                          <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "bio", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                          <td><i class=\"fa-sharp fa-solid fa-trash delete\" data-id = \"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id_str", [], "any", false, false, false, 75), "html", null, true);
            echo "\" style=\"color: #11ac14;\"></i></td>

                      </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "              </tbody>
        </table>
    </div>


    


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/remove-datas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 79,  156 => 75,  152 => 74,  148 => 73,  144 => 72,  141 => 71,  137 => 70,  119 => 57,  103 => 44,  98 => 42,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"common/base.html.twig\" %}


{% block body %}


   <nav class=\"header-navbar bg-dark navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light\">
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
                          <input class=\"form-control\" id=\"edit-search\" type=\"text\" placeholder=\"Search here...\">
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
    <div class=\"container mt-5 p-5\">
       <div class=\"float-right mb-2 text-light font-bold\t\">
          {{ app.request.get('page',1) }} - {{totalPage}}
       </div>
        
        <table class=\"table table-dark border-1\">
              <thead>
                  <tr>
                    <th scope=\"col\">Id</th>
                    <th scope=\"col\">Screen_name</th>
                    <th scope=\"col\">Description</th>
                    <th scope=\"col\">Edıt</th>
                  </tr>
              </thead>
              <tbody>
                  {% for item in data %}
                      <tr>
                          <th scope=\"row\">{{item.id_str}}</th>
                          <td>{{item.screen_name}}</td>
                          <td>{{item.bio}}</td>
                          <td><i class=\"fa-sharp fa-solid fa-trash delete\" data-id = \"{{item.id_str}}\" style=\"color: #11ac14;\"></i></td>

                      </tr>
                  {% endfor %}
              </tbody>
        </table>
    </div>


    


{% endblock %}


", "admin/remove-datas.html.twig", "C:\\xampp\\htdocs\\used-car-listing\\templates\\admin\\remove-datas.html.twig");
    }
}
