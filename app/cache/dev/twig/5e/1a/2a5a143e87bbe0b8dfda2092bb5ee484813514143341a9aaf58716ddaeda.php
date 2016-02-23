<?php

/* BenUserBundle:admin:form.html.twig */
class __TwigTemplate_5e1a2a5a143e87bbe0b8dfda2092bb5ee484813514143341a9aaf58716ddaeda extends Twig_Template
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
        echo "<div class=\"tabbable\">
    <ul class=\"nav nav-tabs\">
      <li class=\"active\"><a href=\"#tab1\"><span class=\"fui-user\"></span> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.meta.identity"), "html", null, true);
        echo "</a></li>
      <li><a href=\"#tab2\"><span class=\"fui-book\"></span> ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.meta.contact"), "html", null, true);
        echo "</a></li>
      <li><a href=\"#tab3\"><span class=\"fui-myspace\"></span> ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.meta.association"), "html", null, true);
        echo "</a></li>
    </ul> <!-- /tabs -->
\t <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"tab1\">
              <div class=\"form-group\">
                <label for=\"\" class=\"col-sm-4 control-label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.profile.avatar"), "html", null, true);
        echo "</label>
                <div class=\"col-sm-4\">
                  <img class=\"myavatar col-md-4\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "profile", array()), "image", array()), "getwebpath", array())), "html", null, true);
        echo "\">
                </div>
              </div>
              ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "image", array()), "file", array()), 'row');
        echo "
              ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "family_name", array()), 'row');
        echo "
              ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "first_name", array()), 'row');
        echo "
              ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "cin", array()), 'row');
        echo "
              ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "barcode", array()), 'row');
        echo "
              ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "gender", array()), 'row');
        echo "
              ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "birthday", array()), 'row');
        echo "
              ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "job", array()), 'row');
        echo "
              ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "diplome", array()), 'row');
        echo "
              ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "expertise", array()), 'row');
        echo "
        </div><!-- /tab1 -->

\t\t\t\t<div class=\"tab-pane\" id=\"tab2\">
              ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "address", array()), 'row');
        echo "
              ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "post_code", array()), 'row');
        echo "
              ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "city", array()), 'row');
        echo "
              ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "contry", array()), 'row');
        echo "
              ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "tel", array()), 'row');
        echo "
              ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "gsm", array()), 'row');
        echo "
              ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
\t\t\t\t</div><!-- /tab2 -->

        <div class=\"tab-pane\" id=\"tab3\">
              ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'row');
        echo "
              ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
              ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainpassword", array()), 'row');
        echo "
              ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "method", array()), 'row');
        echo "
              ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "frequence", array()), 'row');
        echo "
              ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "montant", array()), 'row');
        echo "
              ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profile", array()), "description", array()), 'row');
        echo "
              ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups", array()), 'row');
        echo "
              ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div><!-- /tab3 -->

   \t</div> <!-- /tab-content -->
</div>

            ";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:admin:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 46,  152 => 45,  148 => 44,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  117 => 34,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  93 => 28,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  44 => 12,  39 => 10,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
