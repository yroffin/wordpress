<!-- searchform -->
<?php
/**
 * Copyright 2015 Yannick Roffin.
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *      http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * search forms
 *
 * @package WordPress
 * @subpackage simple
 * @since simple 1.0
 */
?>
<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
    <div>
        <label for="s" class="screen-reader-text">Search for:</label>
        <input type="text" id="s" name="s" value="" />

        <input type="submit" value="Search" id="searchsubmit" />
    </div>
</form>