<?php

/* CoreBundle:Post:show.html.twig */
class __TwigTemplate_0c077631f93c737f4311e9f83c4b02e145a911fd9479dccf7697f603b247cf58 extends Twig_Template
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
            'sidebar' => array($this, 'block_sidebar'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        // line 5
        echo "    <aside>
        <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("author"), "html", null, true);
        echo "</h3>
        
        
            <p>
                <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_core_author_show", array("slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "slug", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.by.author", array("%name%" => "post.author.name")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "name", array()), "html", null, true);
        echo "</a>
            </p> 
        


    </aside>
";
    }

    // line 18
    public function block_section($context, array $blocks = array())
    {
        // line 19
        echo "    
    
    <article class=\"post\">
        <header>
            <h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
            <p>
             ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.on"), "html", null, true);
        echo " <time datetime=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array()), "c"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array())), "html", null, true);
        echo "</time>   
                
            </p>
        </header>
            
            <p>
                ";
        // line 31
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "body", array()), "html", null, true));
        echo " 
            </p>
    </article>
            
            <a id=\"comments\"></a>
            <h2>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comment.plural"), "html", null, true);
        echo "</h2>
            
            ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 39
            echo "                ";
            echo twig_include($this->env, $context, "CoreBundle:Post:_comment.html.twig", array("comment" => $context["comment"]));
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            
            
            <h4>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comment.write"), "html", null, true);
        echo ":</h4>
            
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("action" => ($this->env->getExtension('routing')->getPath("blog_core_post_createcomment", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug", array()))) . "#comments")));
        echo "
            
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 45,  150 => 43,  146 => 41,  129 => 39,  112 => 38,  107 => 36,  99 => 31,  86 => 25,  81 => 23,  75 => 19,  72 => 18,  57 => 10,  50 => 6,  47 => 5,  44 => 4,  38 => 2,  11 => 1,);
    }
}
