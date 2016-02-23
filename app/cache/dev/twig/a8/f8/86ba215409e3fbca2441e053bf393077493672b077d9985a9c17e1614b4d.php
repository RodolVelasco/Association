<?php

/* BenUserBundle:Group:index.html.twig */
class __TwigTemplate_a8f886ba215409e3fbca2441e053bf393077493672b077d9985a9c17e1614b4d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.title"), "html", null, true);
        echo " | ";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.title"), "html", null, true);
        echo "</h2>
<div class=\"row\">
    <div class=\"col-md-8\">     
     <table class=\"table table-hover table-bordered\">
        <thead>
            <tr>
                <th>#</th>
                    <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.meta.name"), "html", null, true);
        echo "</th>
                    <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.form.type"), "html", null, true);
        echo "</th>
                    <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.meta.members"), "html", null, true);
        echo "</th>
                    <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody id=\"dataContainer\">
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "        <tr>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getId", array(), "method"), "html", null, true);
            echo " </td>
            <td><img class=\"img-xs\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["entity"], "getImg", array())), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "getName", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["entity"], "getUsers", array(), "method")), "html", null, true);
            echo "</td>
            <td>
                <a class=\"btn btn-embossed btn-primary showuser btn-xs\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "perPage" => $this->getAttribute((isset($context["app_config"]) ? $context["app_config"] : $this->getContext($context, "app_config")), "rows_per_page", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.show"), "html", null, true);
            echo "\"><span class=\"fui-search\"></span></a>
                <a class=\"btn btn-embossed btn-info btn-xs\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.edit"), "html", null, true);
            echo "\"><span class=\"fui-new\"></span></a>
                ";
            // line 31
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 32
                echo "                <a class=\"btn btn-embossed btn-danger btn-xs js-delete\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.delete"), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
                echo "\"><span class=\"fui-cross\"></span></a>
                ";
            }
            // line 34
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
    <div class=\"caption\"><strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.meta.total"), "html", null, true);
        echo ":</strong> <em>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("group.meta.count", twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")))), "html", null, true);
        echo "</em></div>
    </div>
    <form action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_create"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"col-md-4 well special-form\">
    <h3 style=\"margin-top: 10px;\"> ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.action.new"), "html", null, true);
        echo "</h3>
    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'row');
        echo "
    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "

    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    <button type=\"submit\" name=\"subvalider\" class=\"btn btn-primary btn-embossed\"><span class=\"fui-plus\"></span> ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("ben.action.new"), "html", null, true);
        echo "</button>
    </form>
</div>


";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        // line 56
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script> 
    (function(\$) {
        \$('.table').on('click', '.js-delete', function(){
            return confirmation('voullez-vous vraiment supprimer le groupe '+\$(this).data('id'));
        });
        \$('#js-input').find('.col-md-4').removeClass('col-md-4');
    })(jQuery);
</script>
";
    }

    public function getTemplateName()
    {
        return "BenUserBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 56,  187 => 55,  177 => 48,  172 => 46,  167 => 44,  163 => 43,  159 => 42,  153 => 41,  146 => 39,  142 => 37,  134 => 34,  124 => 32,  122 => 31,  116 => 30,  110 => 29,  105 => 27,  101 => 26,  95 => 25,  91 => 24,  88 => 23,  84 => 22,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  55 => 8,  52 => 7,  49 => 6,  41 => 3,  38 => 2,  11 => 1,);
    }
}
