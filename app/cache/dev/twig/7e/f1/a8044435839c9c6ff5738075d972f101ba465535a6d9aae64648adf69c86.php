<?php

/* BenAssociationBundle::layout.html.twig */
class __TwigTemplate_7ef1a8044435839c9c6ff5738075d972f101ba465535a6d9aae64648adf69c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
            'header' => array($this, 'block_header'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--
         ===================================================================
        ||          designed & developed by benaich.med@gmail.com          ||
         ===================================================================
-->
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"application-name\" content=\"Tacharock\"/>
    <meta name=\"author\" content=\"benaich.med@gmail.com\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    ";
        // line 14
        $this->displayBlock('meta', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 28
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src=\"js/html5shiv.js\"></script>
    <![endif]-->
</head>
";
        // line 35
        $this->displayBlock('container', $context, $blocks);
        // line 135
        echo " 
</html>";
    }

    // line 14
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 15
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == "ar")) {
            // line 17
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-arabic.css"), "html", null, true);
            echo "\" rel=\"stylesheet\"><!-- Loading arabic Bootstrap -->
    ";
        } else {
            // line 19
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
            echo "\" rel=\"stylesheet\"><!-- Loading Bootstrap -->
    ";
        }
        // line 21
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flat-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Loading Flat UI -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Loading my css -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/spinner.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == "ar")) {
            // line 25
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main-arabic.css"), "html", null, true);
            echo "\" rel=\"stylesheet\"><!-- Loading my css -->
    ";
        }
        // line 27
        echo "    ";
    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_name", array()), "html", null, true);
    }

    // line 35
    public function block_container($context, array $blocks = array())
    {
        // line 36
        echo "<body class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "app_theme", array()), "html", null, true);
        echo " ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_MANAGER")) {
            echo "front-end";
        }
        echo "\">
";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 102
        echo "    <section class=\"wrap\">
        <div class=\"container\">    

        ";
        // line 105
        $this->env->loadTemplate("BenAssociationBundle:Default:flashes.html.twig")->display($context);
        // line 106
        echo "        ";
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 113
        echo "
        ";
        // line 114
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "        </div>
    </section>  

    ";
        // line 118
        $this->displayBlock('javascripts', $context, $blocks);
        // line 134
        echo "</body>
";
    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        // line 38
        echo "<header class=\"visible-print print-header hide\">
  <div class=\"pull-right\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_logo", array())), "html", null, true);
        echo "\" alt=\"logo\"/></div>
  <h1>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_name", array()), "html", null, true);
        echo "</h1> 
  <div class=\"clearfix\"></div>
</header>
    <header id=\"adminbar\" class=\"header hidden-print navbar\">
        <a href=\"#\" id=\"logo\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_logo", array())), "html", null, true);
        echo "\" alt=\"logo\" class=\"img-small\"> <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_name", array()), "html", null, true);
        echo "</span></a>

        <div class=\"dropdown pull-right user-profile\">
          <a href=\"#\" id=\"drop3\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
          <img class=\"img-small\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\">
          <span class=\"fullname\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "profile", array()), "fullName", array()), "html", null, true);
        echo "</span> <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
            <ul class=\"dropdown-menu\">
                <li>
                    <div class=\"navbar-content\">
                        <div class=\"row\">
                            <div class=\"col-xs-5\">
                                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array())), "html", null, true);
        echo "\" alt=\"Alternate Text\" class=\"img-responsive\" />
                                <div class=\"clearfix\"></div>
                                <p></p>
                            </div>
                            <div class=\"col-xs-7\">
                                <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                                <p class=\"text-muted small\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</p>
                                <div class=\"divider\"></div>
                                <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_profile_edit", array("name" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.show"), "html", null, true);
        echo "</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"navbar-footer\">
                        <div class=\"navbar-footer-content\">
                            <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.setting"), "html", null, true);
        echo "</a>
                                </div>
                                <div class=\"col-xs-6\">
                                    <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.logout"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <ul class=\"user-menu visible-desktop pull-right\">
            <li>
                <div class=\"dropdown pull-right user-profile\">
                    <a href=\"#\" id=\"drop3\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"glyphicon glyphicon-envelope\"></span>
                        ";
        // line 87
        if (($this->env->getExtension('fos_message')->getNbUnread() != 0)) {
            // line 88
            echo "                            <span class=\"badge badge-important\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('fos_message')->getNbUnread(), "html", null, true);
            echo "</span>
                        ";
        }
        // line 90
        echo "                    </a>
                     ";
        // line 91
        echo $this->env->getExtension('actions')->renderAction($this->env->getExtension('routing')->getUrl("fos_message_unread"), array(), array());
        // line 92
        echo "                </div>
            </li>
            <li><a href=\"#\" title=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.notifications"), "html", null, true);
        echo "\" data-toggle=\"tooltip\"  data-placement=\"bottom\"><span class=\"glyphicon glyphicon-bell\"></span></a></li>
            <li><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_calendar"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.calendar"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\"><span class=\"glyphicon glyphicon-calendar\"></span></a></li>
            <li><a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_stats"), "html", null, true);
        echo "\" title=\"Statistiques\" data-toggle=\"tooltip\" data-placement=\"bottom\"><span class=\"glyphicon glyphicon-stats\"></span></a></li>
        </ul>
    </header>

    ";
        // line 100
        $this->env->loadTemplate("BenAssociationBundle:Default:menu.html.twig")->display($context);
    }

    // line 106
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo " ";
        // line 112
        echo "        ";
    }

    // line 114
    public function block_body($context, array $blocks = array())
    {
    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        // line 119
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-switch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flatui-checkbox.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flatui-radio.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/application.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    (function(\$) {

    })(jQuery);
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 127,  343 => 126,  339 => 125,  335 => 124,  331 => 123,  327 => 122,  323 => 121,  319 => 120,  314 => 119,  311 => 118,  306 => 114,  302 => 112,  298 => 106,  294 => 100,  287 => 96,  281 => 95,  277 => 94,  273 => 92,  271 => 91,  268 => 90,  262 => 88,  260 => 87,  242 => 74,  234 => 71,  221 => 63,  216 => 61,  212 => 60,  204 => 55,  195 => 49,  189 => 48,  180 => 44,  173 => 40,  169 => 39,  166 => 38,  163 => 37,  158 => 134,  156 => 118,  151 => 115,  149 => 114,  146 => 113,  143 => 106,  141 => 105,  136 => 102,  134 => 37,  125 => 36,  122 => 35,  116 => 28,  112 => 27,  106 => 25,  104 => 24,  100 => 23,  96 => 22,  91 => 21,  85 => 19,  79 => 17,  76 => 16,  73 => 15,  68 => 14,  63 => 135,  61 => 35,  52 => 29,  47 => 28,  44 => 15,  42 => 14,  27 => 1,);
    }
}
