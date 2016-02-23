<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_532865e84f7bc2bdd07fc111146321e44a6db5fa94cb3f3f17f063f522d7664d extends Twig_Template
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
        echo "Paramètres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "
<h2><span class=\"fui-gear\"></span> ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fos.user.action.account"), "html", null, true);
        echo "</h2>
";
        // line 9
        $this->env->loadTemplate("FOSUserBundle:ChangePassword:changePassword.html.twig")->display($context);
        // line 10
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\">
<fieldset>
    <legend>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fos.user.action.email"), "html", null, true);
        echo "</legend>    
    
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'row');
        echo "

        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <div class=\"form-group\">
        <div class=\"col-sm-offset-4 col-sm-4\">
            <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary btn-embossed\"><span class=\"fui-new\"></span> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
        echo "</button>
        </div>
    </div>
</fieldset>
</form>
<form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("config_update_lang"), "html", null, true);
        echo "\" method=\"POST\" class=\"form-horizontal\">
<fieldset>
    <legend>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.local.name"), "html", null, true);
        echo " </legend>
    <div class=\"form-group\">
        <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.local.name"), "html", null, true);
        echo " </label>
        <div class=\"col-sm-4\">
            <select name=\"_locale\" class=\"primary select-block\">
                <option ";
        // line 33
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_lang", array()) == "fr_FR")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"fr_FR\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.local.fr"), "html", null, true);
        echo "</option>
                <option ";
        // line 34
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_lang", array()) == "en")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"en\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.local.en"), "html", null, true);
        echo "</option>
                <option ";
        // line 35
        if (($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_lang", array()) == "ar")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"ar\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.form.local.ar"), "html", null, true);
        echo "</option>
            </select>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"col-sm-offset-4 col-sm-4\">
            <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary btn-embossed\"><span class=\"fui-new\"></span> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
        echo "</button>
        </div>
    </div>
</fieldset>
</form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 41,  131 => 35,  123 => 34,  115 => 33,  109 => 30,  104 => 28,  99 => 26,  91 => 21,  85 => 18,  80 => 16,  76 => 15,  72 => 14,  67 => 12,  59 => 10,  57 => 9,  53 => 8,  50 => 7,  47 => 6,  40 => 3,  37 => 2,  11 => 1,);
    }
}
