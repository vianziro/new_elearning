<?php

/* list-peserta-essay.html */
class __TwigTemplate_6dd1a926899c34a99648678ac0f0e3325591e8b6a39cc4e8fe156b8b2d3070d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-private.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Koreksi - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"module\">
    <div class=\"module-head\">
        <h3>";
        // line 10
        echo anchor("tugas", "Tugas");
        echo " / Koreksi</h3>
    </div>
    <div class=\"module-body\">
        ";
        // line 13
        echo get_flashdata("tugas");
        echo "

        <div class=\"bs-callout bs-callout-info\">
            <div class=\"btn-group pull-right\" style=\"margin-top:-5px;\">
                ";
        // line 17
        echo anchor(((("tugas/edit/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon icon-edit\"></i> Edit Tugas", array("class" => "btn btn-default"));
        echo "
                ";
        // line 18
        if (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 0)) {
            // line 19
            echo "                    ";
            echo anchor(((("tugas/terbitkan/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-ok\"></i> Terbitkan", array("class" => "btn btn-success btn-small"));
            echo "
                ";
        } elseif (($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "aktif") == 1)) {
            // line 21
            echo "                    ";
            echo anchor(((("tugas/tutup/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . enurl_redirect(current_url())), "<i class=\"icon-minus\"></i> Tutup", array("class" => "btn btn-danger btn-small"));
            echo "
                ";
        }
        // line 23
        echo "            </div>
            <b><a class=\"as-link\" data-toggle=\"collapse\" data-target=\"#detail-tugas\"><i class=\"icon-info-sign\" style=\"line-height: 0px;\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul")), "html", null, true);
        echo "</a></b>

            <div id=\"detail-tugas\" class=\"collapse\" style=\"margin-top: 5px;\">
                <table class=\"table\">
                    <tr>
                        <th style=\"border-top: none;\" width=\"15%\">Tipe</th>
                        <td style=\"border-top: none;\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "type_label"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Judul</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "judul"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Matapelajaran</th>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "mapel"), "nama"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>
                            <ul class=\"unstyled inline\" style=\"margin-left: -5px;margin-bottom: 0px;\">
                                ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "tugas_kelas"));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 45
            echo "                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["k"]) ? $context["k"] : null), "nama"), "html", null, true);
            echo "</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Info</th>
                        <td>";
        // line 52
        echo $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "info");
        echo "</td>
                    </tr>
                    <tr>
                        <th>Durasi</th>
                        <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "durasi"), "html", null, true);
        echo " Menit</td>
                    </tr>
                </table>
            </div>

        </div>
        <br>

        <table class=\"table table-striped datatable\">
            <thead>
                <tr>
                    <th>Siswa</th>
                    <th>Kelas</th>
                    <th>Nilai</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data_siswa"]) ? $context["data_siswa"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 75
            echo "                <tr>
                    <td>
                        <img style=\"height:20px;width:20px; margin-right: 10px;\" class=\"img-polaroid img-circle pull-left\" src=\"";
            // line 77
            echo twig_escape_filter($this->env, get_url_image_siswa($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "foto"), "medium", $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "jenis_kelamin")), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, site_url(("siswa/detail/" . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id"))), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nama"), "html", null, true);
            echo " ";
            echo (((!twig_test_empty($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nis")))) ? ((("<span class=\"text-muted\">(" . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nis")) . ")</span>")) : (""));
            echo "</b></a>
                    </td>
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "kelas_aktif"), "nama"), "html", null, true);
            echo "</td>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nilai"), "nilai"), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group\">
                            ";
            // line 84
            if (twig_test_empty($this->getAttribute((isset($context["s"]) ? $context["s"] : null), "nilai"))) {
                // line 85
                echo "                                ";
                echo anchor(((("tugas/detail_jawaban/" . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id")) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), "Koreksi", array("class" => "btn btn-small btn-primary iframe-koreksi-jawaban"));
                echo "
                            ";
            } else {
                // line 87
                echo "                                ";
                echo anchor(((("tugas/detail_jawaban/" . $this->getAttribute((isset($context["s"]) ? $context["s"] : null), "id")) . "/") . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")), "Detail", array("class" => "btn btn-small btn-primary iframe-koreksi-jawaban"));
                echo "
                            ";
            }
            // line 89
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, site_url(((("tugas/reset_jawaban/" . $this->getAttribute((isset($context["tugas"]) ? $context["tugas"] : null), "id")) . "/") . (isset($context["s_id"]) ? $context["s_id"] : null))), "html", null, true);
            echo "\" class=\"btn btn-small btn-default\" onclick=\"return confirm('Anda yakin ingin menganggap siswa belum mengerjakan?')\" data-toggle=\"tooltip\" title=\"Reset jawaban siswa, <br>anggap siswa menjadi belum mengerjakan.\">Reset</a>
                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            </tbody>
        </table>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "list-peserta-essay.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 94,  205 => 89,  199 => 87,  193 => 85,  191 => 84,  185 => 81,  181 => 80,  172 => 78,  168 => 77,  164 => 75,  160 => 74,  139 => 56,  132 => 52,  125 => 47,  116 => 45,  112 => 44,  103 => 38,  96 => 34,  89 => 30,  80 => 24,  77 => 23,  71 => 21,  65 => 19,  63 => 18,  59 => 17,  52 => 13,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
