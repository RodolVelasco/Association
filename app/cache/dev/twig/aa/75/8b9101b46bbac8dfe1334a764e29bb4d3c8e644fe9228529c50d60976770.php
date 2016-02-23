<?php

/* BenUserBundle:admin:etiquette.html.twig */
class __TwigTemplate_aa758b9101b46bbac8dfe1334a764e29bb4d3c8e644fe9228529c50d60976770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>Badge</title>
    ";
        // line 6
        $context["addr"] = ("http://" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_ADDR"), "method"));
        echo " 
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, ((isset($context["addr"]) ? $context["addr"] : $this->getContext($context, "addr")) . $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, ((isset($context["addr"]) ? $context["addr"] : $this->getContext($context, "addr")) . $this->env->getExtension('assets')->getAssetUrl("css/main.css")), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Loading my css -->
    <style type=\"text/css\"> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_carte_css", array()), "html", null, true);
        echo " </style>
</head>
<body>
<header class=\"print-header\">
  <div class=\"pull-right\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, ((isset($context["addr"]) ? $context["addr"] : $this->getContext($context, "addr")) . $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_logo", array()))), "html", null, true);
        echo "\" alt=\"logo\"/></div>
  <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_name", array()), "html", null, true);
        echo "</h1> 
  <div class=\"clearfix\"></div>
</header>

  <h3><span class=\"glyphicon glyphicon-user\"></span> Etiquettes des adhérants</h3>
  <h3></h3>
  <div>
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "    <div class=\"box mybadge etiquette printed-badge\">
      <img class=\"pull-right logo\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, ((isset($context["addr"]) ? $context["addr"] : $this->getContext($context, "addr")) . $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_logo", array()))), "html", null, true);
            echo "\"/>
      <div class=\"js-barcode\">
        <ul class=\"list-unstyled\">
          <li><strong>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "profile", array()), "fullName", array()), "html", null, true);
            echo "</strong></li>
          <li><strong>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
            echo "</strong></li>
        </ul>
      </div>
      <div class=\"footer label-primary\">
          <span>Etiquette de repas</span>
      </div>
      <div class=\"clearfix\"></div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      <div class=\"clearfix\"></div>
  </div>
  <div class=\"pull-right\">
      Fait à ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_city", array()), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
  </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:admin:etiquette.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 39,  91 => 36,  76 => 27,  72 => 26,  66 => 23,  63 => 22,  59 => 21,  49 => 14,  45 => 13,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
