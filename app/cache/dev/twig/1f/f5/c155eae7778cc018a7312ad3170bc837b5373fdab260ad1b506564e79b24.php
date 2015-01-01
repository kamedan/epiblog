<?php

/* AdminBundle:Security:login.html.twig */
class __TwigTemplate_1ff5c155eae7778cc018a7312ad3170bc837b5373fdab260ad1b506564e79b24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AdminBundle::layout.html.twig");
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
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Admin login";
    }

    // line 4
    public function block_section($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
     ";
        }
        // line 8
        echo "     <form action=\"";
        echo $this->env->getExtension('routing')->getPath("blog_admin_security_logincheck");
        echo "\" method=\"post\">
         <label for=\"username\">Username:</label>
         <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
         
         <label for=\"password\">Password:</label>
         <input type=\"password\" id=\"password\" name=\"_password\" />
         
         <button type=\"submit\">Login</button>
     </form>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  55 => 8,  49 => 6,  46 => 5,  43 => 4,  37 => 2,  11 => 1,);
    }
}
