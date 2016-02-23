<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_691fef979130543177c369e4183f73aab68c178147d70dcdc33a40f621885323 extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'outcontainer' => array($this, 'block_outcontainer'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "

 ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo " 
";
        // line 9
        $this->displayBlock('outcontainer', $context, $blocks);
        // line 11
        echo "    </section>
 ";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
 ";
    }

    // line 9
    public function block_outcontainer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  60 => 6,  57 => 5,  52 => 11,  50 => 9,  47 => 8,  45 => 5,  41 => 3,  38 => 2,  11 => 1,);
    }
}
