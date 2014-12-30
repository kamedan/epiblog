<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_680b7581a7e251b7c7912687f0f34156fc118f46c34433252556c7104b4ad829 extends Twig_Template
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
            'sidebar' => array($this, 'block_sidebar'),
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/main.css"), "html", null, true);
        echo "\">
 ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "     <header>
         <p>EpiSousse Blog</p>
         <nav>
             <ul>
                 <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("blog_core_post_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo "</a></li>
             </ul>
         </nav>
     </header>
             
   ";
        // line 17
        $this->displayBlock('sidebar', $context, $blocks);
        // line 18
        echo "   
   <section>
       ";
        // line 20
        $this->displayBlock('section', $context, $blocks);
        // line 21
        echo "   </section>
   
   <footer>
       <p>EpiSousse Blog 2015</p>
   </footer>
 ";
    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 20
    public function block_section($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  85 => 17,  76 => 21,  74 => 20,  70 => 18,  68 => 17,  58 => 12,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
