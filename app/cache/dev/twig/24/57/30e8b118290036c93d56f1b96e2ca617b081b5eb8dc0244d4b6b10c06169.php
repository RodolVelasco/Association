<?php

/* BenUserBundle:Group:edit.html.twig */
class __TwigTemplate_245730e8b118290036c93d56f1b96e2ca617b081b5eb8dc0244d4b6b10c06169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Groupes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "     
<h2><span class=\"fui-user\"></span> ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.action.edit"), "html", null, true);
        echo "</h2>
<form id=\"createForm\" class=\"form-horizontal\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"form-group\">
      <label for=\"\" class=\"col-md-4 control-label\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.avatar"), "html", null, true);
        echo "</label>
      <div class=\"col-md-2 text-center\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "getwebpath", array())), "html", null, true);
        echo "\">
      </div>
    </div>
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'row');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'row');
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


    <div class=\"form-group\">
      <div class=\"col-md-offset-4 col-md-4\">
        <button type=\"submit\" class=\"btn btn-primary btn-embossed\"><span class=\"glyphicon glyphicon-plus\"></span> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
        echo "</button>
        ";
        // line 25
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" id=\"js-delete\" class=\"btn btn-embossed btn-danger\"><span class=\"fui-cross\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.delete"), "html", null, true);
            echo " </a>
        ";
        }
        // line 28
        echo "      </div>
    </div>       
</form>

";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
        \$('#js-delete').on('click', confirmation);
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 34,  118 => 33,  110 => 28,  102 => 26,  100 => 25,  96 => 24,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  70 => 13,  65 => 11,  58 => 9,  54 => 8,  51 => 7,  48 => 6,  41 => 3,  38 => 2,  11 => 1,);
    }
}
