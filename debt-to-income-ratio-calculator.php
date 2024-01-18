<?php
/*
 * Plugin Name:       Debt-to-Income (DTI) Calculator
 * Description:       
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Henri Susanto
 * Author URI:        https://github.com/susantohenri/
 * Text Domain:       debt-to-income-calculator
 */


function debt_to_income_calculator()
{
    ob_start();
    wp_enqueue_style('custom-styles', plugin_dir_url(__FILE__) . 'css/custom-styles.css', [], '1.0.0');
    echo "
        <div class=\"debtToIncomeCalculator calx\">
            <div class=\"debtToIncomeCalculatorForm\">
                <div class=\"oneLine\">
                    <label>Monthly Income</label>
                    <div class=\"inputField\">
                        <input type=\"text\" class=\"basicInput\" id=\"field_qbn65\" name=\"item_meta[8]\" value=\"10000\" data-cell=\"D2\" data-format=\"0,0.00\">
                    </div>
                </div>
                <div class=\"oneLine\">
                    <label>Annual Income</label>
                    <div class=\"inputField\">
                        <input type=\"text\" class=\"basicInput\" id=\"field_m65lp\" name=\"item_meta[9]\" value=\"120000\" data-cell=\"D3\" data-format=\"0,0.00\" data-formula=\"D2*12\">
                    </div>
                </div>
                <div class=\"oneLine\">
                    <label>Mortgage/Rent Payments</label>
                    <div class=\"inputField\">
                        <input type=\"text\" class=\"basicInput\" id=\"field_ni39v\" name=\"item_meta[10]\" value=\"2200\" data-cell=\"D4\" data-format=\"0,0.00\">
                    </div>
                </div>
                <div class=\"oneLine\">
                    <label>Auto Loan Payments</label>
                    <div class=\"inputField\">
                        <input type=\"text\" id=\"field_p41oa\" name=\"item_meta[11]\" value=\"340\" data-cell=\"D5\" data-format=\"0,0.00\">
                    </div>
                </div>
                <div class=\"oneLine\">
                    <label>Student Loan Payments</label>
                    <div class=\"inputField\">
                        <input type=\"text\" class=\"basicInput\" id=\"field_vtk9s\" name=\"item_meta[12]\" value=\"100\" data-cell=\"D6\" data-format=\"0,0.00\">
                    </div>
                </div>
                <div class=\"oneLine\">
                    <label>Credit Card Payments</label>
                    <div class=\"inputField\">
                        <input type=\"text\" class=\"basicInput\" id=\"field_tipa5\" name=\"item_meta[13]\" value=\"700\" data-cell=\"D7\" data-format=\"0,0.00\">
                    </div>
                </div>
                <div class=\"oneLine\">
                    <label>Other Loan Payments</label>
                    <div class=\"inputField\">
                        <input type=\"text\" class=\"basicInput\" id=\"field_z1vd8\" name=\"item_meta[14]\" value=\"1000\" data-cell=\"D8\" data-format=\"0,0.00\">
                    </div>
                </div>
                <div class=\"oneLine\">
                    <label>Other Financial Obligations</label>
                    <div class=\"inputField\">
                        <input type=\"text\" class=\"basicInput\" id=\"field_va9sl\" name=\"item_meta[16]\" value=\"\" data-cell=\"D9\" data-format=\"0,0.00\">
                    </div>
                </div>

                <div class=\"oneLine selectbase\">
                    <label>Total Monthly Debt Payments</label>
                    <div class=\"inputField\">
                        <input type=\"text\" class=\"basicInput\" id=\"field_qb4ld\" name=\"item_meta[15]\" value=\"\" data-cell=\"D10\" data-format=\"$0,0.00\" data-formula=\"SUM(D4:D9)\">
                    </div>
                </div>
                <div class=\"oneLine selectbase\">
                    <label>Debt-to-Income Ratio (DTI)</label>
                    <div class=\"inputField\">
                        <input type=\"text\" class=\"basicInput\" id=\"field_8idlu\" name=\"item_meta[17]\" value=\"\" data-cell=\"D11\" data-format=\"0.00%\" data-formula=\"D10/D2\">
                    </div>
                </div>
                <div class=\"oneLine selectbase\">
                    <label>Net Monthly Income</label>
                    <div class=\"inputField\">
                        <input type=\"text\" class=\"basicInput\" id=\"field_ui74j\" name=\"item_meta[18]\" value=\"\" data-cell=\"D12\" data-format=\"$0,0.00\" data-formula=\"D2-D10\">
                    </div>
                </div>
                <div class=\"clear\"></div>
            </div>

            <p></p>
        </div>
    ";
    do_shortcode('[calx]');
    return ob_get_clean();
}
add_shortcode('debt-to-income-calculator', 'debt_to_income_calculator');
