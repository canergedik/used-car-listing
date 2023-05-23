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

/* admin/index.html.twig */
class __TwigTemplate_cc72a536338e8e4487e49549470ee2bd extends \Twig\Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("common/base.html.twig", "admin/index.html.twig", 1);
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

<body class=\"vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar\" data-open=\"click\" data-menu=\"vertical-menu\" data-color=\"bg-chartbg\" data-col=\"2-columns\">

    <!-- fixed-top-->
 
    <div class=\"grid\">
        <div class=\"grid-list\">
          ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "            <div class=\"user-info\">
                <img src=\"";
            // line 14
            ((twig_get_attribute($this->env, $this->source, $context["item"], "profile_image_url", [], "any", true, true, false, 14)) ? (print (twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "profile_image_url", [], "any", false, false, false, 14), ["_normal" => ""]), "html", null, true))) : (print ("")));
            echo "\">
                    <div class=\"attributes\">
                            <span>";
            // line 16
            ((twig_get_attribute($this->env, $this->source, $context["item"], "username", [], "any", true, true, false, 16)) ? (print (twig_escape_filter($this->env, ("@" . twig_get_attribute($this->env, $this->source, $context["item"], "username", [], "any", false, false, false, 16)), "html", null, true))) : (print ("")));
            echo "</span>
                            <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                            <div class=\"ml-0\">
                                      <span> ";
            // line 19
            ((twig_get_attribute($this->env, $this->source, $context["item"], "make", [], "any", true, true, false, 19)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "make", [], "any", false, false, false, 19), "html", null, true))) : (print ("")));
            echo "  </span> 
                                     - <span class=\"ml-0\">   ";
            // line 20
            ((twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", true, true, false, 20)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 20), "html", null, true))) : (print ("")));
            echo "  </span>
                                      <span style=\"display:block; top:30px;\" >  ";
            // line 21
            ((twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", true, true, false, 21)) ? (print (twig_escape_filter($this->env, ("Fiyat: " . twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 21)), "html", null, true))) : (print ("")));
            echo "  </span>
                            </div>
                    </div>
                   
            </div>
            
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
       </div>
         <div class=\"pagination\"> 
              <ul class=\"pagination\">
                        ";
        // line 32
        echo (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 32, $this->source); })());
        echo "
               </ul>
         </div>    
    </div>

   

    <div class=\"my-5 ml-4\"> 
      <form id=\"filter_form\"  enctype=\"multipart/form-data\"  method=\"POST\"> 
              <div  class=\"checkboxes\" id=\"make\" style=\"\">
                    <h2 class=\" ml-1 text-danger make_title\"> 
                        Markalar
                    </h2>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["makes"]) || array_key_exists("makes", $context) ? $context["makes"] : (function () { throw new RuntimeError('Variable "makes" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["make"]) {
            // line 46
            echo "                        <label style=\"\" for=\"";
            echo twig_escape_filter($this->env, ((twig_replace_filter($context["make"], [" " => "-"]) . "-") . $context["id"]), "html", null, true);
            echo "\">
                            <input name=\"make\" type=\"checkbox\" id=\"";
            // line 47
            echo twig_escape_filter($this->env, ((twig_replace_filter($context["make"], [" " => "-"]) . "-") . $context["id"]), "html", null, true);
            echo "\" value= \"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["make"]), "html", null, true);
            echo " \" />";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["make"]), "html", null, true);
            echo "
                        </label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['make'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo " 
              </div>
               <label style=\"\" for=\"year\">
                            <input name=\"year\" type=\"checkbox\" id=\"year\" value = \"2015\">
                        </label>
              <div class=\"checkboxes\" id=\"model\" style=\"\">
                    <h2 class=\"ml-1 mt-2 text-danger\"> 
                        Modeller
                    </h2>
                    
                    <ul id=\"model_list\"></ul>
              </div>
-        <button type=\"submit\" class=\"btn  btn-outline-success\"> Filtrele  </button>
      </form>
    </div>

<script type=\"text/javascript\">
       \$(document).ready(function(){
        //\$(\".model_list\").trigger(\"click\");
        });

 </script>

   

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 50,  142 => 47,  137 => 46,  133 => 45,  117 => 32,  111 => 28,  98 => 21,  94 => 20,  90 => 19,  85 => 17,  81 => 16,  76 => 14,  73 => 13,  69 => 12,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"common/base.html.twig\" %}

{% block body %}


<body class=\"vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar\" data-open=\"click\" data-menu=\"vertical-menu\" data-color=\"bg-chartbg\" data-col=\"2-columns\">

    <!-- fixed-top-->
 
    <div class=\"grid\">
        <div class=\"grid-list\">
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

       </div>
         <div class=\"pagination\"> 
              <ul class=\"pagination\">
                        {{pager|raw}}
               </ul>
         </div>    
    </div>

   

    <div class=\"my-5 ml-4\"> 
      <form id=\"filter_form\"  enctype=\"multipart/form-data\"  method=\"POST\"> 
              <div  class=\"checkboxes\" id=\"make\" style=\"\">
                    <h2 class=\" ml-1 text-danger make_title\"> 
                        Markalar
                    </h2>
                    {% for id,make in makes  %}
                        <label style=\"\" for=\"{{make|replace({' ':'-'})  ~ '-' ~ id }}\">
                            <input name=\"make\" type=\"checkbox\" id=\"{{make|replace({' ':'-'})  ~ '-' ~ id }}\" value= \"{{make|lower}} \" />{{make|capitalize }}
                        </label>
                    {% endfor %}
 
              </div>
               <label style=\"\" for=\"year\">
                            <input name=\"year\" type=\"checkbox\" id=\"year\" value = \"2015\">
                        </label>
              <div class=\"checkboxes\" id=\"model\" style=\"\">
                    <h2 class=\"ml-1 mt-2 text-danger\"> 
                        Modeller
                    </h2>
                    
                    <ul id=\"model_list\"></ul>
              </div>
-        <button type=\"submit\" class=\"btn  btn-outline-success\"> Filtrele  </button>
      </form>
    </div>

<script type=\"text/javascript\">
       \$(document).ready(function(){
        //\$(\".model_list\").trigger(\"click\");
        });

 </script>

   

{% endblock %}


", "admin/index.html.twig", "C:\\xampp\\htdocs\\used-car-listing\\templates\\admin\\index.html.twig");
    }
}
