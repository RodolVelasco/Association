<?php

/* BenAssociationBundle:Status:index.html.twig */
class __TwigTemplate_ae12949957d56037404d2f96b4feec79132ae206e7dff5da399222b16a7efe94 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.title"), "html", null, true);
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.title"), "html", null, true);
        echo "</h2>
<div class=\"row\">
    <div class=\"col-md-7\">
        <table class=\"table table-hover table-bordered\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.meta.name"), "html", null, true);
        echo "</th>
                    <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.meta.members"), "html", null, true);
        echo "</th>
                    <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.actions"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "                <tr>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["entity"], "avancements", array())), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("status_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
            echo "</a></td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </tbody>
        </table>
         <div class=\"caption\"><strong>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.total"), "html", null, true);
        echo ":</strong> <em>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("status.meta.count", twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))), "html", null, true);
        echo "</em></div>
    </div>

    <div class=\"col-md-5\">
    <form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("status_create"), "html", null, true);
        echo "\" class=\"form-horizontal well\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        <div class=\"form-group\">
            <div class=\"col-md-4\"><strong>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.form.name"), "html", null, true);
        echo "</strong></div>
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
        </div>

        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <div class=\"form-group\">
          <div class=\"col-sm-offset-4 col-sm-6\">
            <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-edit\"></span> ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.new"), "html", null, true);
        echo "</button>
          </div>
        </div>
    </form>
    </div>
</div>

";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
        \$('#status_form_name').parent().removeClass('col-md-4').addClass('col-md-8');
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenAssociationBundle:Status:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 51,  177 => 50,  165 => 42,  159 => 39,  153 => 36,  149 => 35,  142 => 33,  133 => 29,  129 => 27,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  95 => 20,  78 => 19,  71 => 15,  67 => 14,  63 => 13,  52 => 6,  49 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
