<?php

/* AdminBundle::layout.html.twig */
class __TwigTemplate_9a3a6d253daf65600f8020145f27210a60fbbc83e8240f9b2014021e8abc336e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/main.css"), "html", null, true);
        echo "\">
 ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "     <header>
         <p>EpiSousse Blog | Admin</p>
         <nav>
             <ul>
                 <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("blog_admin_post_index");
        echo "\">Posts</a></li>
                 <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("blog_admin_author_index");
        echo "\">Authors</a></li>
                 ";
        // line 14
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 15
            echo "                 <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("blog_admin_security_logout");
            echo "\">Logout</a></li>
                 ";
        }
        // line 17
        echo "             </ul>
         </nav>
     </header>
             
   
   
   <section>
       ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            echo "           ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 26
                echo "               <p class=\"session-message\">";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
       
       ";
        // line 30
        $this->displayBlock('section', $context, $blocks);
        // line 32
        echo "       
   </section>
   
   <footer>
       <p>EpiSousse Blog 2015</p>
   </footer>
 ";
    }

    // line 30
    public function block_section($context, array $blocks = array())
    {
        // line 31
        echo "       ";
    }

    public function getTemplateName()
    {
        return "AdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  121 => 30,  111 => 32,  109 => 30,  100 => 28,  91 => 26,  86 => 25,  82 => 24,  73 => 17,  67 => 15,  65 => 14,  61 => 13,  57 => 12,  51 => 8,  48 => 7,  41 => 3,  38 => 2,  11 => 1,);
    }
}
