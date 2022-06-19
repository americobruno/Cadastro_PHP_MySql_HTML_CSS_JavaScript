<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* table/relation/foreign_key_row.twig */
class __TwigTemplate_87684624883002a4d4485802229c8aa1584276984659d133053cd74eb4de80a3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<tr>
    ";
        // line 3
        echo "    <td>
        ";
        // line 4
        $context["js_msg"] = "";
        // line 5
        echo "        ";
        $context["this_params"] = null;
        // line 6
        echo "        ";
        if ($this->getAttribute(($context["one_key"] ?? null), "constraint", [], "array", true, true)) {
            // line 7
            echo "            ";
            $context["drop_fk_query"] = (((((("ALTER TABLE " . PhpMyAdmin\Util::backquote(($context["db"] ?? null))) . ".") . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " DROP FOREIGN KEY ") . PhpMyAdmin\Util::backquote($this->getAttribute(            // line 9
($context["one_key"] ?? null), "constraint", [], "array"))) . ";");
            // line 11
            echo "            ";
            $context["this_params"] = ($context["url_params"] ?? null);
            // line 12
            echo "            ";
            $context["this_params"] = ["goto" => "tbl_relation.php", "back" => "tbl_relation.php", "sql_query" =>             // line 15
($context["drop_fk_query"] ?? null), "message_to_show" => sprintf(_gettext("Foreign key constraint %s has been dropped"), $this->getAttribute(            // line 17
($context["one_key"] ?? null), "constraint", [], "array"))];
            // line 20
            echo "            ";
            $context["js_msg"] = PhpMyAdmin\Sanitize::jsFormat((((((("ALTER TABLE " .             // line 21
($context["db"] ?? null)) . ".") . ($context["table"] ?? null)) . " DROP FOREIGN KEY ") . $this->getAttribute(            // line 23
($context["one_key"] ?? null), "constraint", [], "array")) . ";"));
            // line 25
            echo "        ";
        }
        // line 26
        echo "        ";
        if ($this->getAttribute(($context["one_key"] ?? null), "constraint", [], "array", true, true)) {
            // line 27
            echo "            <input type=\"hidden\" class=\"drop_foreign_key_msg\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, ($context["js_msg"] ?? null), "html", null, true);
            echo "\" />
            ";
            // line 29
            $context["drop_str"] = PhpMyAdmin\Util::getIcon("b_drop", _gettext("Drop"));
            // line 30
            echo "            ";
            echo PhpMyAdmin\Util::linkOrButton("sql.php", ($context["this_params"] ?? null), ($context["drop_str"] ?? null), ["class" => "drop_foreign_key_anchor ajax"]);
            echo "
        ";
        }
        // line 32
        echo "    </td>
    <td>
        <span class=\"formelement clearfloat\">
            <input type=\"text\" name=\"constraint_name[";
        // line 35
        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
        echo "]\" value=\"";
        // line 36
        (($this->getAttribute(($context["one_key"] ?? null), "constraint", [], "array", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["one_key"] ?? null), "constraint", [], "array"), "html", null, true))) : (print ("")));
        // line 37
        echo "\" placeholder=\"";
        echo _gettext("Constraint name");
        echo "\" maxlength=\"64\" />
        </span>
        <div class=\"floatleft\">
            ";
        // line 43
        echo "            ";
        $context["on_delete"] = (($this->getAttribute(($context["one_key"] ?? null), "on_delete", [], "array", true, true)) ? ($this->getAttribute(        // line 44
($context["one_key"] ?? null), "on_delete", [], "array")) : ("RESTRICT"));
        // line 45
        echo "            ";
        $context["on_update"] = (($this->getAttribute(($context["one_key"] ?? null), "on_update", [], "array", true, true)) ? ($this->getAttribute(        // line 46
($context["one_key"] ?? null), "on_update", [], "array")) : ("RESTRICT"));
        // line 47
        echo "            <span class=\"formelement\">
                ";
        // line 48
        $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 48)->display(twig_to_array(["dropdown_question" => "ON DELETE", "select_name" => (("on_delete[" .         // line 50
($context["i"] ?? null)) . "]"), "choices" =>         // line 51
($context["options_array"] ?? null), "selected_value" =>         // line 52
($context["on_delete"] ?? null)]));
        // line 54
        echo "            </span>
            <span class=\"formelement\">
                ";
        // line 56
        $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 56)->display(twig_to_array(["dropdown_question" => "ON UPDATE", "select_name" => (("on_update[" .         // line 58
($context["i"] ?? null)) . "]"), "choices" =>         // line 59
($context["options_array"] ?? null), "selected_value" =>         // line 60
($context["on_update"] ?? null)]));
        // line 62
        echo "            </span>
        </div>
    </td>
    <td>
        ";
        // line 66
        if ($this->getAttribute(($context["one_key"] ?? null), "index_list", [], "array", true, true)) {
            // line 67
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["one_key"] ?? null), "index_list", [], "array"));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 68
                echo "                <span class=\"formelement clearfloat\">
                    ";
                // line 69
                $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 69)->display(twig_to_array(["dropdown_question" => "", "select_name" => (("foreign_key_fields_name[" .                 // line 71
($context["i"] ?? null)) . "][]"), "choices" =>                 // line 72
($context["column_array"] ?? null), "selected_value" =>                 // line 73
$context["column"]]));
                // line 75
                echo "                </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        ";
        } else {
            // line 78
            echo "            <span class=\"formelement clearfloat\">
                ";
            // line 79
            $this->loadTemplate("table/relation/dropdown_generate.twig", "table/relation/foreign_key_row.twig", 79)->display(twig_to_array(["dropdown_question" => "", "select_name" => (("foreign_key_fields_name[" .             // line 81
($context["i"] ?? null)) . "][]"), "choices" =>             // line 82
($context["column_array"] ?? null), "selected_value" => ""]));
            // line 85
            echo "            </span>
        ";
        }
        // line 87
        echo "        <a class=\"formelement clearfloat add_foreign_key_field\" data-index=\"";
        // line 88
        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
        echo "\" href=\"\">
            ";
        // line 89
        echo _gettext("+ Add column");
        // line 90
        echo "        </a>
    </td>
    ";
        // line 92
        $context["tables"] = [];
        // line 93
        echo "    ";
        if (($context["foreign_db"] ?? null)) {
            // line 94
            echo "        ";
            $context["tables"] = call_user_func_array($this->env->getFunction('Relation_getTables')->getCallable(), [($context["foreign_db"] ?? null), ($context["tbl_storage_engine"] ?? null)]);
            // line 95
            echo "    ";
        }
        // line 96
        echo "    <td>
        <span class=\"formelement clearfloat\">
            ";
        // line 98
        $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 98)->display(twig_to_array(["name" => (("destination_foreign_db[" .         // line 99
($context["i"] ?? null)) . "]"), "title" => _gettext("Database"), "values" =>         // line 101
($context["databases"] ?? null), "foreign" =>         // line 102
($context["foreign_db"] ?? null)]));
        // line 104
        echo "        </span>
    </td>
    <td>
        <span class=\"formelement clearfloat\">
            ";
        // line 108
        $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 108)->display(twig_to_array(["name" => (("destination_foreign_table[" .         // line 109
($context["i"] ?? null)) . "]"), "title" => _gettext("Table"), "values" =>         // line 111
($context["tables"] ?? null), "foreign" =>         // line 112
($context["foreign_table"] ?? null)]));
        // line 114
        echo "        </span>
    </td>
    <td>
        ";
        // line 117
        if ((($context["foreign_db"] ?? null) && ($context["foreign_table"] ?? null))) {
            // line 118
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["one_key"] ?? null), "ref_index_list", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["foreign_column"]) {
                // line 119
                echo "                <span class=\"formelement clearfloat\">
                    ";
                // line 120
                $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 120)->display(twig_to_array(["name" => (("destination_foreign_column[" .                 // line 121
($context["i"] ?? null)) . "][]"), "title" => _gettext("Column"), "values" =>                 // line 123
($context["unique_columns"] ?? null), "foreign" =>                 // line 124
$context["foreign_column"]]));
                // line 126
                echo "                </span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foreign_column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "        ";
        } else {
            // line 129
            echo "            <span class=\"formelement clearfloat\">
                ";
            // line 130
            $this->loadTemplate("table/relation/relational_dropdown.twig", "table/relation/foreign_key_row.twig", 130)->display(twig_to_array(["name" => (("destination_foreign_column[" .             // line 131
($context["i"] ?? null)) . "][]"), "title" => _gettext("Column"), "values" => [], "foreign" => ""]));
            // line 136
            echo "            </span>
        ";
        }
        // line 138
        echo "    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "table/relation/foreign_key_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 138,  244 => 136,  242 => 131,  241 => 130,  238 => 129,  235 => 128,  228 => 126,  226 => 124,  225 => 123,  224 => 121,  223 => 120,  220 => 119,  215 => 118,  213 => 117,  208 => 114,  206 => 112,  205 => 111,  204 => 109,  203 => 108,  197 => 104,  195 => 102,  194 => 101,  193 => 99,  192 => 98,  188 => 96,  185 => 95,  182 => 94,  179 => 93,  177 => 92,  173 => 90,  171 => 89,  167 => 88,  165 => 87,  161 => 85,  159 => 82,  158 => 81,  157 => 79,  154 => 78,  151 => 77,  144 => 75,  142 => 73,  141 => 72,  140 => 71,  139 => 69,  136 => 68,  131 => 67,  129 => 66,  123 => 62,  121 => 60,  120 => 59,  119 => 58,  118 => 56,  114 => 54,  112 => 52,  111 => 51,  110 => 50,  109 => 48,  106 => 47,  104 => 46,  102 => 45,  100 => 44,  98 => 43,  91 => 37,  89 => 36,  86 => 35,  81 => 32,  75 => 30,  73 => 29,  69 => 28,  67 => 27,  64 => 26,  61 => 25,  59 => 23,  58 => 21,  56 => 20,  54 => 17,  53 => 15,  51 => 12,  48 => 11,  46 => 9,  44 => 7,  41 => 6,  38 => 5,  36 => 4,  33 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/relation/foreign_key_row.twig", "/var/www/html/admin/templates/table/relation/foreign_key_row.twig");
    }
}
