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
            echo "            <div class=\"user-info\">
                <img src=\"";
            // line 4
            ((twig_get_attribute($this->env, $this->source, $context["item"], "profile_image_url", [], "any", true, true, false, 4)) ? (print (twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "profile_image_url", [], "any", false, false, false, 4), ["_normal" => ""]), "html", null, true))) : (print ("")));
            echo "\">
                    <div class=\"attributes\">
                            <span>";
            // line 6
            ((twig_get_attribute($this->env, $this->source, $context["item"], "username", [], "any", true, true, false, 6)) ? (print (twig_escape_filter($this->env, ("@" . twig_get_attribute($this->env, $this->source, $context["item"], "username", [], "any", false, false, false, 6)), "html", null, true))) : (print ("")));
            echo "</span>
                            <p>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>
                            <div class=\"ml-0\">
                                      <span> ";
            // line 9
            ((twig_get_attribute($this->env, $this->source, $context["item"], "make", [], "any", true, true, false, 9)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "make", [], "any", false, false, false, 9), "html", null, true))) : (print ("")));
            echo "  </span> 
                                     - <span class=\"ml-0\">   ";
            // line 10
            ((twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", true, true, false, 10)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 10), "html", null, true))) : (print ("")));
            echo "  </span>
                                      <span style=\"display:block; top:30px;\" >  ";
            // line 11
            ((twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", true, true, false, 11)) ? (print (twig_escape_filter($this->env, ("Fiyat: " . twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 11)), "html", null, true))) : (print ("")));
            echo "  </span>
                            </div>
                    </div>
                   
            </div>
            
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
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
        return array (  91 => 22,  85 => 18,  72 => 11,  68 => 10,  64 => 9,  59 => 7,  55 => 6,  50 => 4,  47 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        <div class=\"grid-list\">
          {% for item in data %}
            <div class=\"user-info\">
                <img src=\"{{item.profile_image_url is defined ?  item.profile_image_url|replace({'_normal':''}) : ''}}\">
                    <div class=\"attributes\">
                            <span>{{item.username is defined  ? '@' ~  item.username : ''}}</span>
                            <p>{{item.description}}</p>
                            <div class=\"ml-0\">
                                      <span> {{item.make is defined ? item.make : '' }}  </span> 
                                     - <span class=\"ml-0\">   {{item.model is defined ? item.model : '' }}  </span>
                                      <span style=\"display:block; top:30px;\" >  {{item.price is defined ? 'Fiyat: '  ~  item.price : '' }}  </span>
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
", "admin/listing_data.html.twig", "C:\\xampp\\htdocs\\used-car-listing\\templates\\admin\\listing_data.html.twig");
    }
}
