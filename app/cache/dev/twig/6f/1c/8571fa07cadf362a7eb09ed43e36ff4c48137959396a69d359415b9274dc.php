<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_6f1c8571fa07cadf362a7eb09ed43e36ff4c48137959396a69d359415b9274dc extends Twig_Template
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
        echo "<form class=\"form-horizontal\" method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_change_password"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), 'enctype');
        echo " >
    <fieldset>
        <legend>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("fos.user.action.password.change"), "html", null, true);
        echo "</legend>

        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), "current_password", array()), 'row', array("label" => "Mot de passe actuel"));
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), "new", array()), "first", array()), 'row', array("label" => "Nouveau mot de passe"));
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), "new", array()), "second", array()), 'row', array("label" => "Confirmer votre mot de passe"));
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordform"]) ? $context["passwordform"] : $this->getContext($context, "passwordform")), 'rest');
        echo "

    <div class=\"form-group\">
        <div class=\"col-sm-offset-4 col-sm-4\">
            <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary btn-embossed\"><span class=\"fui-new\"></span> ";
        // line 13
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
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  45 => 9,  40 => 7,  36 => 6,  32 => 5,  27 => 3,  19 => 1,);
    }
}
