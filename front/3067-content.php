<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3067">
    <div class="container">
        <div class="rates">
            <div class="RatesTabNav">
                <ul class="nav" role="tablist">
                    <li class="active"><a class="btn" href="">Calling Rates</a></li>
                    <li><a class="btn" href="">SMS Rates</a></li>
                    <li><a class="btn" href="">Out of freedays?</a></li>
                    <li><a class="btn" href="">Mobile Top Up Rates</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <label for="currency">Show rates in (Currency):</label>
                <div class="custom-select">
                    <select id="currency">
                        <div class><option value="usd">United States Dollar</option></div>
                    </select>
                </div>
            </div>

            <div class="col-sm-6">
                <label for="country">Your country:</label>
                <div class="custom-select">
                    <select id="country">
                        <option value="Select Your Country">Select Your Country</option>
                        <option value="">Select Your Country</option>
                        <option value="">Select Your Countrya</option>
                        <option value="">Select Your Country</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="ratesalphabet">
            <ul>
                <li>A</li>
                <li>B</li>
                <li>C</li>
                <li>D</li>
                <li>E</li>
                <li>F</li>
                <li>G</li>
                <li>H</li>
                <li>I</li>
                <li>J</li>
                <li>K</li>
                <li>L</li>
                <li>M</li>
                <li>N</li>
                <li>O</li>
                <li>P</li>
                <li>Q</li>
                <li>R</li>
                <li>S</li>
                <li>T</li>
                <li>U</li>
                <li>V</li>
                <li>W</li>
                <li>X</li>
                <li>Y</li>
                <li>Z</li>
            </ul>
        </div>
        <!-- Show entries and search bar -->
        <div class="table-controls">
            <div class="show-entries">
                <label for="show-entries">Show</label>
                <select id="show-entries">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <label for="show-entries">entries</label>
            </div>
            <div class="search-box">
                <label for="search">Search:</label>
                <input type="text" id="search" placeholder="">
            </div>
        </div>

        <div class="table-section">
            <table>
                <thead>
                    <tr class="d">
                        <th class="a">Country</th>
                        <th class="b">USD/min</th>
                        <th class="c">Inc. VAT</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data row -->
                    <tr class="list_color">
                        <td class="Country">Afghanistan</td>
                        <td class="USD">0.210</td>
                        <td class="VAT">0.210</td>
                    </tr>
                    <tr>
                        <td class="Country">Albania</td>
                        <td class="USD">0.210</td>
                        <td class="VAT">0.210</td>
                    </tr>
                    <tr class="list_color">
                        <td class="Country">Algeria</td>
                        <td class="USD">0.166</td>
                        <td class="VAT">0.166</td>
                    </tr>
                    <tr>
                        <td class="Country">American Samoa</td>
                        <td class="USD">0.243</td>
                        <td class="VAT">0.243</td>
                    </tr>
                    <tr class="list_color">
                        <td class="Country">Armenia</td>
                        <td class="USD">0.332</td>
                        <td class="VAT">0.332</td>
                    </tr>
                    <tr>
                        <td class="Country">Angola</td>
                        <td class="USD">0.332</td>
                        <td class="VAT">0.332</td>
                    </tr>
                    <tr class="list_color">
                        <td class="Country">Argentina</td>
                        <td class="USD">0.044</td>
                        <td class="VAT">0.044</td>
                    </tr>
                    <tr>
                        <td class="Country">Australia</td>
                        <td class="USD">0.044</td>
                        <td class="VAT">0.044</td>
                    </tr>
                    <tr class="list_color">
                        <td class="Country">Aruba</td>
                        <td class="USD">0.387</td>
                        <td class="VAT">0.387</td>
                    </tr>
                    <tr>
                        <td class="Country">Azerbaijan</td>
                        <td class="USD">0.553</td>
                        <td class="VAT">0.553</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="dataTables_info">Showing 1 to 10 of 155 entries
                </div>
            </div>
            <div class="col-sm-7">
                <div class="pagination">
                    <span>Previous</span>
                    <span class="page active">1</span>
                    <span class="page">2</span>
                    <span class="page">3</span>
                    <span class="page">4</span>
                    <span class="page">5</span>
                    <span class="page">...</span>
                    <span class="page">16</span>
                    <span>Next</span>
                </div>
            </div>
        </div>

    </div>
</div>