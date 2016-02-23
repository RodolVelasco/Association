<?php

/* BenAssociationBundle:config:fields.html.twig */
class __TwigTemplate_fbef15f0a7f676cee265b8d56d914067944eacd7c86af4dbdaf7f9078c3964c9 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.action.fields"), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "   ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "   
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/froala_editor.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<h2><span class=\"fui-gear\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.action.fields"), "html", null, true);
        echo "</h2>
<form class=\"form-horizontal\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("config_update_fields"), "html", null, true);
        echo "\" method=\"POST\">        
        <div class=\"tabbable\">
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab1\"><span class=\"fui-user\"></span> ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.members"), "html", null, true);
        echo "</a></li>
              <li><a href=\"#tab2\"><span class=\"fui-tag\"></span> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.menu.cotisation"), "html", null, true);
        echo "</a></li>
            </ul> <!-- /tabs -->

            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab1\">
              <table class=\"table table-hover table-bordered table-striped\">
                <thead>
                <tr>
                    <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.id"), "html", null, true);
        echo "</th>
                    <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.meta.field.name"), "html", null, true);
        echo "</th>
                    <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.meta.field.visible"), "html", null, true);
        echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "userTable", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "                <tr>
                  <td><input type=\"hidden\" name=\"config[";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "][id]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fieldname", array()), "html", null, true);
            echo "</td>
                  <td><input type=\"text\" name=\"config[";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "][nicename]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nicename", array()), "html", null, true);
            echo "\" class=\"form-control\"></td>
                  <td><input type=\"checkbox\" name=\"config[";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "][visible]\" ";
            if ($this->getAttribute($context["item"], "visible", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "isvisible", array()), "html", null, true);
            echo "\" data-toggle=\"switch\" /></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
              </table>
            </div><!-- /tab1 -->
              <div class=\"tab-pane\" id=\"tab2\">
              <table class=\"table table-hover table-bordered table-striped\">
                <thead>
                <tr>
                    <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.id"), "html", null, true);
        echo "</th>
                    <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.meta.field.name"), "html", null, true);
        echo "</th>
                    <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("config.meta.field.visible"), "html", null, true);
        echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "cotisationTable", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            echo "                <tr>
                  <td><input type=\"hidden\" name=\"config[";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "][id]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fieldname", array()), "html", null, true);
            echo "</td>
                  <td><input type=\"text\" name=\"config[";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "][nicename]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nicename", array()), "html", null, true);
            echo "\" class=\"form-control\"></td>
                  <td><input type=\"checkbox\" name=\"config[";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "][visible]\" ";
            if ($this->getAttribute($context["item"], "visible", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "isvisible", array()), "html", null, true);
            echo "\" data-toggle=\"switch\" /></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </tbody>
              </table>
            </div><!-- /tab1 -->
            </div> <!-- /tab-content -->
          </div>
              <div class=\"form-group\">
                <div class=\"col-sm-offset-4 col-sm-4\">
                  <button type=\"submit\" class=\"btn btn-primary btn-embossed\"><span class=\"fui-check-inverted\"></span> ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
        echo "</button>
                </div>
              </div>
</form>
   
";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/froala_editor.min.js"), "html", null, true);
        echo "\"></script>
<script> 
    (function(\$) {

      \$('.veditor').editable({inlineMode: false});
      \$('.fr-dropdown').find('.fa-magic').parent().hide();

    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:config:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 72,  230 => 71,  227 => 70,  217 => 64,  208 => 57,  193 => 54,  187 => 53,  179 => 52,  176 => 51,  172 => 50,  165 => 46,  161 => 45,  157 => 44,  148 => 37,  133 => 34,  127 => 33,  119 => 32,  116 => 31,  112 => 30,  105 => 26,  101 => 25,  97 => 24,  86 => 16,  82 => 15,  76 => 12,  71 => 11,  68 => 10,  62 => 8,  58 => 7,  53 => 6,  50 => 5,  42 => 3,  39 => 2,  11 => 1,);
    }
}
