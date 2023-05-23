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

/* admin/edit-data.html.twig */
class __TwigTemplate_2e8d970cf827784c3fd15d55b22bd057 extends \Twig\Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit-data.html.twig"));

        // line 1
        echo "<div class=\"container \">
       <div class=\"float-right mb-2 text-light font-bold\t\">
          ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "get", [0 => "page", 1 => 1], "method", false, false, false, 3), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["totalPage"]) || array_key_exists("totalPage", $context) ? $context["totalPage"] : (function () { throw new RuntimeError('Variable "totalPage" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "
       </div>
        <table class=\"table table-dark\">
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
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "                        <tr>
                            <th scope=\"row\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id_str", [], "any", false, false, false, 17), "html", null, true);
            echo "</th>
                            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "screen_name", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "bio", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                            <td><i class=\"fa-sharp fa-solid fa-trash delete\" data-id = \"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id_str", [], "any", false, false, false, 20), "html", null, true);
            echo "\" style=\"color: #11ac14;\"></i></td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </tbody>

        </table>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  65 => 16,  61 => 15,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container \">
       <div class=\"float-right mb-2 text-light font-bold\t\">
          {{ app.request.get('page',1) }} - {{totalPage}}
       </div>
        <table class=\"table table-dark\">
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
    </div>", "admin/edit-data.html.twig", "C:\\xampp\\htdocs\\used-car-listing\\templates\\admin\\edit-data.html.twig");
    }
}
