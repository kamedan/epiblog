<?php

/* CoreBundle:Post:_comment.html.twig */
class __TwigTemplate_0eb1671f85fc5302d502f458dd414307c738360497c14d7765ec53ee394dd4b6 extends Twig_Template
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
        echo "<article class=\"comment\">
    <header>
        <p>
            ";
        // line 4
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("on")), "html", null, true);
        echo " <time datetime=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt", array()), "c"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt", array())), "html", null, true);
        echo "</time>
             ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("by"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "authorName", array()), "html", null, true);
        echo "
        </p>
    </header>
             <p>";
        // line 8
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "body", array()), "html", null, true));
        echo "</p>
</article>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  32 => 5,  24 => 4,  19 => 1,);
    }
}
