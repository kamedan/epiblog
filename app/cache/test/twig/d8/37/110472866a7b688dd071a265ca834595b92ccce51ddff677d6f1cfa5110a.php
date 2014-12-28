<?php

/* CoreBundle:Post:index.html.twig */
class __TwigTemplate_d837110472866a7b688dd071a265ca834595b92ccce51ddff677d6f1cfa5110a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CoreBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.plural"), "html", null, true);
    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Post:index page</h1>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
