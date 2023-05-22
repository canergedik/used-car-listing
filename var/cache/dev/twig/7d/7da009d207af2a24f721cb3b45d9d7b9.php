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

/* admin/listing_data.html.twig */
class __TwigTemplate_f4384017016ae8c1699145a7c89950f3 extends \Twig\Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listing_data.html.twig"));

        // line 1
        echo "        <div class=\"grid-list\">
          ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "
          <div class=\"user-info\">
             <img src=\"";
            // line 5
            ((twig_get_attribute($this->env, $this->source, $context["item"], "profile_image_url", [], "any", true, true, false, 5)) ? (print (twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "profile_image_url", [], "any", false, false, false, 5), ["_normal" => ""]), "html", null, true))) : (print ("")));
            echo "\">
             <div class=\"attributes\">
                      <span>@";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", [], "any", false, false, false, 7), "html", null, true);
            echo "</span>
                      <p>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "bio", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
                      <div class=\"ml-0\">
                            <span> ";
            // line 10
            ((twig_get_attribute($this->env, $this->source, $context["item"], "make", [], "any", true, true, false, 10)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "make", [], "any", false, false, false, 10), "html", null, true))) : (print ("")));
            echo "  </span> 
                            - <span class=\"ml-3\">   ";
            // line 11
            ((twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", true, true, false, 11)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 11), "html", null, true))) : (print ("")));
            echo "  </span>
                      </div>
                     
             
             </div>

          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
         <div class=\"pagination\"> 
              <ul class=\"pagination\">
                        ";
        // line 22
        echo (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 22, $this->source); })());
        echo "
               </ul>
         </div>    
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/listing_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  83 => 19,  69 => 11,  65 => 10,  60 => 8,  56 => 7,  51 => 5,  47 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <div class=\"grid-list\">
          {% for item in data %}

          <div class=\"user-info\">
             <img src=\"{{item.profile_image_url is defined ?  item.profile_image_url|replace({'_normal':''}) : ''}}\">
             <div class=\"attributes\">
                      <span>@{{item.username}}</span>
                      <p>{{item.bio}}</p>
                      <div class=\"ml-0\">
                            <span> {{item.make is defined ? item.make : '' }}  </span> 
                            - <span class=\"ml-3\">   {{item.model is defined ? item.model : '' }}  </span>
                      </div>
                     
             
             </div>

          </div>
          {% endfor %}

         <div class=\"pagination\"> 
              <ul class=\"pagination\">
                        {{pager|raw}}
               </ul>
         </div>    
    </div>
", "admin/listing_data.html.twig", "C:\\xampp\\htdocs\\used-cars-listing-demo\\templates\\admin\\listing_data.html.twig");
    }
}
