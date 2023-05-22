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

/* common/base.html.twig */
class __TwigTemplate_2e3838c6ae62b952dbf549b9b1448903 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"loading\" lang=\"en\" data-textdirection=\"ltr\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta name=\"description\" content=\"Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.\">
    <meta name=\"keywords\" content=\"admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard\">
    <meta name=\"author\" content=\"ThemeSelect\">
    <title>Dashboard - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel=\"apple-touch-icon\" href=\"theme-assets/images/ico/apple-icon-120.png\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"theme-assets/images/ico/favicon.ico\">
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("panel/theme-assets/css/vendors.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("panel/theme-assets/css/app-lite.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("panel/theme-assets/css/core/menu/menu-types/vertical-menu.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("panel/theme-assets/css/core/colors/palette-gradient.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("panel/theme-assets/css/pages/dashboard-ecommerce.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/new.css"), "html", null, true);
        echo "\">

    
    <script src=\"https://kit.fontawesome.com/4e886f281e.js\" crossorigin=\"anonymous\"></script>
    <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>


  </head>


  ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo " 



    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("panel/theme-assets/vendors/js/vendors.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("panel/theme-assets/js/core/app-menu-lite.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/index.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
    
  </body> 

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "

  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "common/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 31,  118 => 30,  106 => 39,  102 => 38,  98 => 37,  92 => 33,  90 => 30,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"loading\" lang=\"en\" data-textdirection=\"ltr\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta name=\"description\" content=\"Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.\">
    <meta name=\"keywords\" content=\"admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard\">
    <meta name=\"author\" content=\"ThemeSelect\">
    <title>Dashboard - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel=\"apple-touch-icon\" href=\"theme-assets/images/ico/apple-icon-120.png\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"theme-assets/images/ico/favicon.ico\">
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('panel/theme-assets/css/vendors.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('panel/theme-assets/css/app-lite.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('panel/theme-assets/css/core/menu/menu-types/vertical-menu.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('panel/theme-assets/css/core/colors/palette-gradient.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('panel/theme-assets/css/pages/dashboard-ecommerce.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/new.css')}}\">

    
    <script src=\"https://kit.fontawesome.com/4e886f281e.js\" crossorigin=\"anonymous\"></script>
    <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>


  </head>


  {% block body %}


  {% endblock %} 



    <script src=\"{{asset('panel/theme-assets/vendors/js/vendors.min.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('panel/theme-assets/js/core/app-menu-lite.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('web/js/index.js')}}\"  type=\"text/javascript\"></script>
    
  </body> 

</html>", "common/base.html.twig", "C:\\xampp\\htdocs\\used-cars-listing-demo\\templates\\common\\base.html.twig");
    }
}
