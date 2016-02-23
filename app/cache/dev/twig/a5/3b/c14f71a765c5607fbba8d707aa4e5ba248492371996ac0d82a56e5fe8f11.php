<?php

/* FOSMessageBundle:Message:unread.html.twig */
class __TwigTemplate_a53bc14f71a765c5607fbba8d707aa4e5ba248492371996ac0d82a56e5fe8f11 extends Twig_Template
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
        echo "<ul class=\"dropdown-menu popup-messages\">
    <li>
        <div class=\"navbar-content\">
            <ul class=\"threadslist\">
                ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 6
            echo "                ";
            $context["sender"] = $this->getAttribute($context["thread"], "getParticipant", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method");
            // line 7
            echo "                <li class=\"thread-item row ";
            if ( !$this->env->getExtension('fos_message')->isRead($context["thread"])) {
                echo "unread";
            }
            echo "\" id=\"message_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-md-2\">
                        <strong>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["sender"]) ? $context["sender"] : $this->getContext($context, "sender")), "html", null, true);
            echo "</strong>
                    </div>
                    <div class=\"col-md-10\">
                        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
            echo "#message_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
            echo "\"><p class=\"muted\"><small>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "excerpt", array()), "html", null, true);
            echo "</small></p>
                        </a>
                    </div>
                </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "                <li class=\"thread-item\">
                    <div class=\"col-right\">
                        <div class=\"body-content\" >
                            <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.meta.no"), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </ul>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"navbar-footer\">
            <div class=\"navbar-footer-content text-center\">
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_message_inbox"), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\">see all messages</a>
            </div>
        </div>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:unread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  79 => 25,  68 => 20,  63 => 17,  49 => 12,  43 => 9,  33 => 7,  30 => 6,  25 => 5,  19 => 1,);
    }
}
