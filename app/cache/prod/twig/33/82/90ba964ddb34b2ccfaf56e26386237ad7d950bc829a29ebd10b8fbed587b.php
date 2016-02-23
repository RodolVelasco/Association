<?php

/* ::base.html.twig */
class __TwigTemplate_338290ba964ddb34b2ccfaf56e26386237ad7d950bc829a29ebd10b8fbed587b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"benaich.med@gmail.com\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("icon.png"), "html", null, true);
        echo "\" />
</head>
<body>
<div class=\"container\">
    <p></p>
    <div class=\"well\">
    \t";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "    </div>
</div>
</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Error";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  55 => 8,  48 => 16,  46 => 15,  37 => 9,  33 => 8,  29 => 7,  21 => 1,);
    }
}
