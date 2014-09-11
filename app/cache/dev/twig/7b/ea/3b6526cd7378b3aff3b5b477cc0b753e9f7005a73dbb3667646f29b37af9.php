<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_7bea3b6526cd7378b3aff3b5b477cc0b753e9f7005a73dbb3667646f29b37af9 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  80 => 19,  44 => 10,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  27 => 4,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  51 => 15,  49 => 19,  39 => 6,  32 => 12,  57 => 16,  40 => 7,  108 => 33,  104 => 31,  102 => 30,  98 => 29,  93 => 28,  90 => 27,  87 => 20,  84 => 25,  81 => 24,  67 => 16,  62 => 23,  56 => 9,  36 => 7,  33 => 10,  30 => 3,  52 => 13,  48 => 11,  46 => 7,  43 => 8,  37 => 7,  26 => 5,  22 => 2,  19 => 1,  58 => 14,  55 => 13,  53 => 11,  50 => 8,  34 => 4,  31 => 5,  88 => 28,  82 => 25,  78 => 24,  72 => 16,  68 => 14,  64 => 12,  59 => 13,  54 => 21,  47 => 9,  45 => 8,  41 => 9,  38 => 13,  35 => 4,  29 => 4,);
    }
}
