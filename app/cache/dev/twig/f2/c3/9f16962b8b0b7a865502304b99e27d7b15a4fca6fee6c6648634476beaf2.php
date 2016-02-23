<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f2c39f16962b8b0b7a865502304b99e27d7b15a4fca6fee6c6648634476beaf2 extends Twig_Template
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
            'stylesheet' => array($this, 'block_stylesheet'),
            'container' => array($this, 'block_container'),
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
        echo "Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 10
    public function block_container($context, array $blocks = array())
    {
        // line 11
        echo "<body class=\"login-screen\">
    
    ";
        // line 13
        $this->env->loadTemplate("BenAssociationBundle:Default:flashes.html.twig")->display($context);
        // line 14
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
    <div class=\"login-warper\">
        <div class=\"login-icon\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_logo", array())), "html", null, true);
        echo "\" alt=\"Welcome to Mail App\">
            <h4>Welcome to <small>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "org_name", array()), "html", null, true);
        echo "</small></h4>
        </div>
        <div class=\"login-form\">
            ";
        // line 21
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "            <div class=\"form-group text-center\"><span class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</span></div>
            ";
        }
        // line 24
        echo "            <div class=\"form-group\">
              <input type=\"text\" name=\"_username\" class=\"form-control login-field\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.username"), "html", null, true);
        echo "\" id=\"login-name\">
              <label class=\"login-field-icon fui-user\" for=\"login-name\"></label>
            </div>

            <div class=\"form-group\">
              <input type=\"password\" class=\"form-control login-field\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.plainpassword"), "html", null, true);
        echo "\" id=\"login-pass\">
              <label class=\"login-field-icon fui-lock\" for=\"login-pass\"></label>
            </div>
                <div class=\"form-group\">
                    <label class=\"checkbox primary checked\" for=\"checkbox6\">
                    <span class=\"icons\"><span class=\"first-icon fui-checkbox-unchecked\"></span><span class=\"second-icon fui-checkbox-checked\"></span></span><input type=\"checkbox\" checked=\"checked\" name=\"_remember_me\" value=\"on\" id=\"checkbox6\" data-toggle=\"checkbox\">
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.form.rememberme"), "html", null, true);
        echo "
                  </label>
                </div>

            <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.action.login"), "html", null, true);
        echo "</button>
            <a class=\"login-link\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_request"), "html", null, true);
        echo "\">Mot de passe oublié ?</a>
        </div>
    </div>
    </form>
  </body>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flatui-checkbox.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    (function(\$) {

    })(jQuery);
    </script>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 49,  145 => 48,  141 => 47,  137 => 46,  129 => 41,  125 => 40,  118 => 36,  109 => 30,  99 => 25,  96 => 24,  90 => 22,  88 => 21,  82 => 18,  78 => 17,  71 => 14,  69 => 13,  65 => 11,  62 => 10,  56 => 7,  51 => 6,  48 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
