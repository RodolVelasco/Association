<?php

/* BenUserBundle:admin:new.html.twig */
class __TwigTemplate_43d2ba3f4f848deeb8f76ab191ec8e879be5d5efabee42d5c3f9f3bed217baf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BenAssociationBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BenAssociationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.new"), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2><span class=\"fui-user\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.new"), "html", null, true);
        echo "</h2>
<form class=\"form-horizontal\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ben_add_user"), "html", null, true);
        echo "\" method=\"POST\" role=\"form\"  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t";
        // line 8
        $this->env->loadTemplate("BenUserBundle:admin:form.html.twig")->display($context);
        // line 9
        echo "
    <div class=\"form-group\">
      <div class=\"col-sm-offset-4 col-sm-4\">
        <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary btn-embossed\"><span class=\"fui-plus\"></span> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.new"), "html", null, true);
        echo "</button>
      </div>
    </div>
</form>
";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
    \t\$('#user_form_groups_1').parent().hide();
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:admin:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  79 => 18,  70 => 12,  65 => 9,  63 => 8,  57 => 7,  52 => 6,  49 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
