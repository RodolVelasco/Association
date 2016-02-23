<?php

/* BenAssociationBundle:Cotisation:edit.html.twig */
class __TwigTemplate_9db1ada54b3a258e2f46d941f6b42af49ad992713abccdcc470d489f70de9a45 extends Twig_Template
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
        echo "Tableau de bord | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2><span class=\"fui-home\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cotisation.action.edit"), "html", null, true);
        echo "</h2>
<form id=\"createForm\" class=\"form-horizontal\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 8
        $this->env->loadTemplate("BenAssociationBundle:Cotisation:form.html.twig")->display($context);
        // line 9
        echo "
    <div class=\"form-group\">
      <div class=\"col-md-offset-4 col-md-4\">
        <button type=\"submit\" class=\"btn btn-primary btn-embossed\"><span class=\"glyphicon glyphicon-edit\"></span> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
        echo "</button>
        ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo "<button id=\"js-delete\" class=\"btn btn-embossed btn-danger\"><span class=\"fui-cross\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.delete"), "html", null, true);
            echo " </button>";
        }
        // line 14
        echo "      </div>
    </div>
</form>

<form id=\"deleteForm\" action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cotisation_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
</form>

";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
        \$('#cotisation_form_user').closest('.form-group').hide();
        \$('#js-delete').on('click', function(){
            \$('#deleteForm').submit();
            return false;
        });
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:Cotisation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  97 => 23,  89 => 19,  85 => 18,  79 => 14,  73 => 13,  69 => 12,  64 => 9,  62 => 8,  56 => 7,  51 => 6,  48 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
