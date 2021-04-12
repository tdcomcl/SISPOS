SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00023818016052246

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.002129077911377

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066995620727539

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00032496452331543

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00029993057250977

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0019428730010986

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00021600723266602

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0020921230316162

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00030398368835449

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019216537475586

SHOW TABLES FROM `ospos` 
 Execution Time:0.0007939338684082

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014090538024902

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034189224243164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028300285339355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017881393432617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017189979553223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018191337585449

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017328262329102

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00021004676818848

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0020668506622314

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029706954956055

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0001990795135498

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019407272338867

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070905685424805

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00026297569274902

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023484230041504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024795532226562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001981258392334

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024199485778809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018215179443359

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017750263214111

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00016403198242188

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0018491744995117

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00014615058898926

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00011610984802246

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00015401840209961

SHOW TABLES FROM `ospos` 
 Execution Time:0.0005190372467041

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00020384788513184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027894973754883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019192695617676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018787384033203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017619132995605

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024795532226562

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00024104118347168

SELECT MAX(items.item_id) AS item_id, MAX(items.name) AS name, MAX(items.category) AS category, MAX(items.supplier_id) AS supplier_id, MAX(items.item_number) AS item_number, MAX(items.description) AS description, MAX(items.cost_price) AS cost_price, MAX(items.unit_price) AS unit_price, MAX(items.reorder_level) AS reorder_level, MAX(items.receiving_quantity) AS receiving_quantity, MAX(items.pic_filename) AS pic_filename, MAX(items.allow_alt_description) AS allow_alt_description, MAX(items.is_serialized) AS is_serialized, MAX(items.pack_name) AS pack_name, MAX(items.tax_category_id) AS tax_category_id, MAX(items.deleted) AS deleted, MAX(suppliers.person_id) AS person_id, MAX(suppliers.company_name) AS company_name, MAX(suppliers.agency_name) AS agency_name, MAX(suppliers.account_number) AS account_number, MAX(suppliers.deleted) AS deleted, MAX(inventory.trans_id) AS trans_id, MAX(inventory.trans_items) AS trans_items, MAX(inventory.trans_user) AS trans_user, MAX(inventory.trans_date) AS trans_date, MAX(inventory.trans_comment) AS trans_comment, MAX(inventory.trans_location) AS trans_location, MAX(inventory.trans_inventory) AS trans_inventory, MAX(item_quantities.item_id) AS qty_item_id, MAX(item_quantities.location_id) AS location_id, MAX(item_quantities.quantity) AS quantity, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_items` AS `items`
LEFT JOIN `ospos_suppliers` AS `suppliers` ON `suppliers`.`person_id` = `items`.`supplier_id`
JOIN `ospos_inventory` AS `inventory` ON `inventory`.`trans_items` = `items`.`item_id`
JOIN `ospos_item_quantities` AS `item_quantities` ON `item_quantities`.`item_id` = `items`.`item_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `items`.`item_id` AND `ospos_attribute_links`.`receiving_id` IS NULL AND `ospos_attribute_links`.`sale_id` IS NULL AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `location_id` = '1'
AND DATE_FORMAT(trans_date, "%Y-%m-%d") BETWEEN '2010-01-01' AND '2021-02-23'
AND `items`.`deleted` = 0
AND `items`.`item_type` IN(0, 1, 2)
GROUP BY `items`.`item_id`
 LIMIT 25 
 Execution Time:0.019485950469971

SELECT COUNT(DISTINCT items.item_id) AS count, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_items` AS `items`
LEFT JOIN `ospos_suppliers` AS `suppliers` ON `suppliers`.`person_id` = `items`.`supplier_id`
JOIN `ospos_inventory` AS `inventory` ON `inventory`.`trans_items` = `items`.`item_id`
JOIN `ospos_item_quantities` AS `item_quantities` ON `item_quantities`.`item_id` = `items`.`item_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `items`.`item_id` AND `ospos_attribute_links`.`receiving_id` IS NULL AND `ospos_attribute_links`.`sale_id` IS NULL AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `location_id` = '1'
AND DATE_FORMAT(trans_date, "%Y-%m-%d") BETWEEN '2010-01-01' AND '2021-02-23'
AND `items`.`deleted` = 0
AND `items`.`item_type` IN(0, 1, 2) 
 Execution Time:0.0056807994842529

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00021719932556152

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020217895507812

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '3' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00021886825561523

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '4' 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016880035400391

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '5' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00022101402282715

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '7' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '8' 
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '9' 
 Execution Time:0.00019383430480957

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '13' 
 Execution Time:0.00018692016601562

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '14' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00022101402282715

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '15' 
 Execution Time:0.00016617774963379

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020503997802734

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '16' 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00018119812011719

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '35' 
 Execution Time:0.00018119812011719

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '57' 
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '63' 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '126' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016593933105469

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '130' 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00021004676818848

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '159' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00019192695617676

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '181' 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020313262939453

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '193' 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020289421081543

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '197' 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016403198242188

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '201' 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.0001978874206543

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '278' 
 Execution Time:0.00016593933105469

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020313262939453

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '332' 
 Execution Time:0.0001978874206543

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00018095970153809

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017120838165283

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00021004676818848

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0022799968719482

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019311904907227

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015115737915039

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001838207244873

SHOW TABLES FROM `ospos` 
 Execution Time:0.00074100494384766

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023603439331055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026798248291016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017786026000977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0022568702697754

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00022792816162109

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0021798610687256

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020194053649902

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00016212463378906

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019311904907227

SHOW TABLES FROM `ospos` 
 Execution Time:0.00063204765319824

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014185905456543

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030303001403809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029110908508301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025105476379395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024890899658203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00032496452331543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001990795135498

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0029809474945068

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00032401084899902

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0035400390625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033688545227051

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00029301643371582

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00026798248291016

SHOW TABLES FROM `ospos` 
 Execution Time:0.00092911720275879

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023889541625977

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003509521484375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042390823364258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024509429931641

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028896331787109

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0029480457305908

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00028109550476074

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0033411979675293

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028896331787109

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00018811225891113

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00027108192443848

SHOW TABLES FROM `ospos` 
 Execution Time:0.00088596343994141

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018596649169922

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034689903259277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037813186645508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027298927307129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023984909057617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000244140625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002598762512207

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00026607513427734

SELECT MAX(items.item_id) AS item_id, MAX(items.name) AS name, MAX(items.category) AS category, MAX(items.supplier_id) AS supplier_id, MAX(items.item_number) AS item_number, MAX(items.description) AS description, MAX(items.cost_price) AS cost_price, MAX(items.unit_price) AS unit_price, MAX(items.reorder_level) AS reorder_level, MAX(items.receiving_quantity) AS receiving_quantity, MAX(items.pic_filename) AS pic_filename, MAX(items.allow_alt_description) AS allow_alt_description, MAX(items.is_serialized) AS is_serialized, MAX(items.pack_name) AS pack_name, MAX(items.tax_category_id) AS tax_category_id, MAX(items.deleted) AS deleted, MAX(suppliers.person_id) AS person_id, MAX(suppliers.company_name) AS company_name, MAX(suppliers.agency_name) AS agency_name, MAX(suppliers.account_number) AS account_number, MAX(suppliers.deleted) AS deleted, MAX(inventory.trans_id) AS trans_id, MAX(inventory.trans_items) AS trans_items, MAX(inventory.trans_user) AS trans_user, MAX(inventory.trans_date) AS trans_date, MAX(inventory.trans_comment) AS trans_comment, MAX(inventory.trans_location) AS trans_location, MAX(inventory.trans_inventory) AS trans_inventory, MAX(item_quantities.item_id) AS qty_item_id, MAX(item_quantities.location_id) AS location_id, MAX(item_quantities.quantity) AS quantity, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_items` AS `items`
LEFT JOIN `ospos_suppliers` AS `suppliers` ON `suppliers`.`person_id` = `items`.`supplier_id`
JOIN `ospos_inventory` AS `inventory` ON `inventory`.`trans_items` = `items`.`item_id`
JOIN `ospos_item_quantities` AS `item_quantities` ON `item_quantities`.`item_id` = `items`.`item_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `items`.`item_id` AND `ospos_attribute_links`.`receiving_id` IS NULL AND `ospos_attribute_links`.`sale_id` IS NULL AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `location_id` = '1'
AND DATE_FORMAT(trans_date, "%Y-%m-%d") BETWEEN '2010-01-01' AND '2021-02-23'
AND `items`.`deleted` = 0
AND `items`.`item_type` IN(0, 1, 2)
GROUP BY `items`.`item_id`
 LIMIT 25 
 Execution Time:0.00039505958557129

SELECT COUNT(DISTINCT items.item_id) AS count, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_items` AS `items`
LEFT JOIN `ospos_suppliers` AS `suppliers` ON `suppliers`.`person_id` = `items`.`supplier_id`
JOIN `ospos_inventory` AS `inventory` ON `inventory`.`trans_items` = `items`.`item_id`
JOIN `ospos_item_quantities` AS `item_quantities` ON `item_quantities`.`item_id` = `items`.`item_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `items`.`item_id` AND `ospos_attribute_links`.`receiving_id` IS NULL AND `ospos_attribute_links`.`sale_id` IS NULL AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `location_id` = '1'
AND DATE_FORMAT(trans_date, "%Y-%m-%d") BETWEEN '2010-01-01' AND '2021-02-23'
AND `items`.`deleted` = 0
AND `items`.`item_type` IN(0, 1, 2) 
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00018405914306641

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00042605400085449

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '3' 
 Execution Time:0.00020503997802734

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00021696090698242

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '4' 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00030183792114258

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '5' 
 Execution Time:0.00019192695617676

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00027585029602051

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.0002131462097168

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.0002129077911377

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '7' 
 Execution Time:0.00026488304138184

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.0002138614654541

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '8' 
 Execution Time:0.00020217895507812

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020813941955566

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '9' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '13' 
 Execution Time:0.0001990795135498

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020909309387207

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '14' 
 Execution Time:0.00019001960754395

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00024986267089844

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '15' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00021481513977051

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '16' 
 Execution Time:0.00025391578674316

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00024104118347168

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '35' 
 Execution Time:0.00018787384033203

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020408630371094

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '57' 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020217895507812

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '63' 
 Execution Time:0.00023698806762695

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020694732666016

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '126' 
 Execution Time:0.00018882751464844

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020194053649902

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '130' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020384788513184

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '159' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '181' 
 Execution Time:0.00019311904907227

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020098686218262

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '193' 
 Execution Time:0.00022101402282715

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020694732666016

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '197' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.0002138614654541

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '201' 
 Execution Time:0.00013613700866699

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00014615058898926

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00014185905456543

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '278' 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '332' 
 Execution Time:0.00013589859008789

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00014996528625488

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00023508071899414

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00026702880859375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019693374633789

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00020289421081543

SHOW TABLES FROM `ospos` 
 Execution Time:0.0006401538848877

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013995170593262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00049996376037598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027894973754883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018215179443359

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021004676818848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002281665802002

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00021100044250488

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00023102760314941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018906593322754

SHOW TABLES FROM `ospos` 
 Execution Time:0.00071001052856445

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031399726867676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00032401084899902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020313262939453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020098686218262

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.0001988410949707

SELECT MAX(items.item_id) AS item_id, MAX(items.name) AS name, MAX(items.category) AS category, MAX(items.supplier_id) AS supplier_id, MAX(items.item_number) AS item_number, MAX(items.description) AS description, MAX(items.cost_price) AS cost_price, MAX(items.unit_price) AS unit_price, MAX(items.reorder_level) AS reorder_level, MAX(items.receiving_quantity) AS receiving_quantity, MAX(items.pic_filename) AS pic_filename, MAX(items.allow_alt_description) AS allow_alt_description, MAX(items.is_serialized) AS is_serialized, MAX(items.pack_name) AS pack_name, MAX(items.tax_category_id) AS tax_category_id, MAX(items.deleted) AS deleted, MAX(suppliers.person_id) AS person_id, MAX(suppliers.company_name) AS company_name, MAX(suppliers.agency_name) AS agency_name, MAX(suppliers.account_number) AS account_number, MAX(suppliers.deleted) AS deleted, MAX(inventory.trans_id) AS trans_id, MAX(inventory.trans_items) AS trans_items, MAX(inventory.trans_user) AS trans_user, MAX(inventory.trans_date) AS trans_date, MAX(inventory.trans_comment) AS trans_comment, MAX(inventory.trans_location) AS trans_location, MAX(inventory.trans_inventory) AS trans_inventory, MAX(item_quantities.item_id) AS qty_item_id, MAX(item_quantities.location_id) AS location_id, MAX(item_quantities.quantity) AS quantity, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_items` AS `items`
LEFT JOIN `ospos_suppliers` AS `suppliers` ON `suppliers`.`person_id` = `items`.`supplier_id`
JOIN `ospos_inventory` AS `inventory` ON `inventory`.`trans_items` = `items`.`item_id`
JOIN `ospos_item_quantities` AS `item_quantities` ON `item_quantities`.`item_id` = `items`.`item_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `items`.`item_id` AND `ospos_attribute_links`.`receiving_id` IS NULL AND `ospos_attribute_links`.`sale_id` IS NULL AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `location_id` = '1'
AND DATE_FORMAT(trans_date, "%Y-%m-%d") BETWEEN '2010-01-01' AND '2021-02-23'
AND   (
`name` LIKE '%12343211%' ESCAPE '!'
OR  `item_number` LIKE '%12343211%' ESCAPE '!'
OR  `items`.`item_id` LIKE '%12343211%' ESCAPE '!'
OR  `company_name` LIKE '%12343211%' ESCAPE '!'
OR  `items`.`category` LIKE '%12343211%' ESCAPE '!'
 )
AND `items`.`deleted` = 0
AND `items`.`item_type` IN(0, 1, 2)
GROUP BY `items`.`item_id`
 LIMIT 25 
 Execution Time:0.0085020065307617

SELECT COUNT(DISTINCT items.item_id) AS count, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_items` AS `items`
LEFT JOIN `ospos_suppliers` AS `suppliers` ON `suppliers`.`person_id` = `items`.`supplier_id`
JOIN `ospos_inventory` AS `inventory` ON `inventory`.`trans_items` = `items`.`item_id`
JOIN `ospos_item_quantities` AS `item_quantities` ON `item_quantities`.`item_id` = `items`.`item_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `items`.`item_id` AND `ospos_attribute_links`.`receiving_id` IS NULL AND `ospos_attribute_links`.`sale_id` IS NULL AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `location_id` = '1'
AND DATE_FORMAT(trans_date, "%Y-%m-%d") BETWEEN '2010-01-01' AND '2021-02-23'
AND   (
`name` LIKE '%12343211%' ESCAPE '!'
OR  `item_number` LIKE '%12343211%' ESCAPE '!'
OR  `items`.`item_id` LIKE '%12343211%' ESCAPE '!'
OR  `company_name` LIKE '%12343211%' ESCAPE '!'
OR  `items`.`category` LIKE '%12343211%' ESCAPE '!'
 )
AND `items`.`deleted` = 0
AND `items`.`item_type` IN(0, 1, 2) 
 Execution Time:0.0049819946289062

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.001986026763916

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00026202201843262

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0036330223083496

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027799606323242

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019001960754395

SHOW TABLES FROM `ospos` 
 Execution Time:0.00084209442138672

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030207633972168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029206275939941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018119812011719

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018405914306641

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0018808841705322

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00023102760314941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0026271343231201

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028681755065918

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0002140998840332

SHOW TABLES FROM `ospos` 
 Execution Time:0.00064396858215332

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020098686218262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023603439331055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00038909912109375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027799606323242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023007392883301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022482872009277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024986267089844

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` IS NULL 
 Execution Time:0.00022101402282715

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` IS NULL 
 Execution Time:0.00020384788513184

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0021560192108154

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00021195411682129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0021829605102539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022602081298828

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00020003318786621

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019311904907227

SHOW TABLES FROM `ospos` 
 Execution Time:0.0008080005645752

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014281272888184

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034117698669434

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028610229492188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018215179443359

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` IS NULL 
 Execution Time:0.00024318695068359

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` IS NULL 
 Execution Time:0.00020098686218262

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0029540061950684

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00029301643371582

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0032989978790283

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003809928894043

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00025391578674316

SHOW TABLES FROM `ospos` 
 Execution Time:0.00087714195251465

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00025606155395508

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00033402442932129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00052404403686523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023889541625977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00032806396484375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023603439331055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022602081298828

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0037899017333984

SELECT GET_LOCK('7bc00efccce837b71a391a3b8adf82a1', 300) AS ci_session_lock 
 Execution Time:0.00055098533630371

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd6g8u6vv6cjejdf7b0urjte93ouhog7e'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0038080215454102

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0005638599395752

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0003972053527832

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00038599967956543

SHOW TABLES FROM `ospos` 
 Execution Time:0.0016219615936279

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00062704086303711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00038695335388184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001828670501709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018477439880371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002739429473877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003209114074707

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` IS NULL 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` IS NULL 
 Execution Time:0.00022006034851074

SELECT GET_LOCK('97efd5604a18a997aab0b04770dbb89b', 300) AS ci_session_lock 
 Execution Time:0.00032210350036621

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gu2k1mm5tb1sdhs28lvc0j19lv3jjrb3'
AND `ip_address` = '178.73.215.171' 
 Execution Time:0.0034449100494385

SHOW TABLES FROM `ospos` 
 Execution Time:0.0011467933654785

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020503997802734

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043106079101562

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00026178359985352

SELECT GET_LOCK('81976cb1f134c93492db9907133870eb', 300) AS ci_session_lock 
 Execution Time:0.0002591609954834

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dl8qqj6ldnf4t6k3kckqablj07f1v7e5'
AND `ip_address` = '121.4.208.200' 
 Execution Time:0.0020911693572998

SHOW TABLES FROM `ospos` 
 Execution Time:0.00076913833618164

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001518726348877

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00040602684020996

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023698806762695

SELECT GET_LOCK('4a5c4ce0bce25a1efa922fe302b37cd0', 300) AS ci_session_lock 
 Execution Time:0.00025296211242676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'c94lr3pp3fv0lce89hpt19vrjapth837'
AND `ip_address` = '167.248.133.40' 
 Execution Time:0.0022320747375488

SHOW TABLES FROM `ospos` 
 Execution Time:0.00069403648376465

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00036001205444336

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023102760314941

SELECT GET_LOCK('36922fcdbce05f0850e673d8b87b95a5', 300) AS ci_session_lock 
 Execution Time:0.0002901554107666

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'micb6qbun65ni8scb38j5okqgf9uk508'
AND `ip_address` = '167.248.133.40' 
 Execution Time:0.0021591186523438

SHOW TABLES FROM `ospos` 
 Execution Time:0.0007169246673584

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00038599967956543

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022101402282715

SELECT GET_LOCK('b9281e0cbf422e9e3abcd1052ea98a89', 300) AS ci_session_lock 
 Execution Time:0.00033903121948242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ohq3hm8vev5rmrrhf107ig1sf38rmqs1'
AND `ip_address` = '71.6.232.7' 
 Execution Time:0.0021169185638428

SHOW TABLES FROM `ospos` 
 Execution Time:0.0010511875152588

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00028896331787109

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018215179443359

SELECT GET_LOCK('141908d531151d33d4e081c69fa25705', 300) AS ci_session_lock 
 Execution Time:0.00031399726867676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6s07010afvvu22f7nkktdnrje5gsps67'
AND `ip_address` = '184.105.247.252' 
 Execution Time:0.0024271011352539

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070714950561523

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014686584472656

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003058910369873

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020813941955566

SELECT GET_LOCK('a443048d0ec100a0295b378e3096f1bb', 300) AS ci_session_lock 
 Execution Time:0.00030016899108887

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '4cve7hn2i1040gt9ur7hols8tmbv9pf3'
AND `ip_address` = '177.52.26.35' 
 Execution Time:0.0024411678314209

SHOW TABLES FROM `ospos` 
 Execution Time:0.00069093704223633

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015020370483398

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029301643371582

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021791458129883

SELECT GET_LOCK('a9d5565a581e0cfa26b62b36f0c32ae0', 300) AS ci_session_lock 
 Execution Time:0.00037384033203125

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'nsjlbn4uufavolu1ner3usd4jne1k26u'
AND `ip_address` = '195.24.210.118' 
 Execution Time:0.0033998489379883

SHOW TABLES FROM `ospos` 
 Execution Time:0.00094008445739746

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00040411949157715

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00033211708068848

SELECT GET_LOCK('7e56c37adc1f7b1ed1a27bf858e75ca3', 300) AS ci_session_lock 
 Execution Time:0.00037693977355957

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bbeaafhtk2gvfgm6q0337crperqvb0bs'
AND `ip_address` = '81.71.146.142' 
 Execution Time:0.0028200149536133

SHOW TABLES FROM `ospos` 
 Execution Time:0.00073814392089844

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015687942504883

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030207633972168

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00030088424682617

SELECT GET_LOCK('63095569106eea21fc88946f548400de', 300) AS ci_session_lock 
 Execution Time:0.00031399726867676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5vbetsktcmm1hlti2cqvtvtqjprmlsno'
AND `ip_address` = '109.184.66.66' 
 Execution Time:0.0034489631652832

SHOW TABLES FROM `ospos` 
 Execution Time:0.00059390068054199

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00025796890258789

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002140998840332

SELECT GET_LOCK('5e6990781962d902cb36770702a4563c', 300) AS ci_session_lock 
 Execution Time:0.00025105476379395

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'amkeunk1troj1iuihnb62b8irp25sk87'
AND `ip_address` = '162.142.125.54' 
 Execution Time:0.0021629333496094

SHOW TABLES FROM `ospos` 
 Execution Time:0.00076103210449219

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001518726348877

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029087066650391

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021696090698242

SELECT GET_LOCK('f17e6dfc923012850f49c842244395e8', 300) AS ci_session_lock 
 Execution Time:0.00023794174194336

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9rfdhi3ih2j246ao1je2og46v2267i6s'
AND `ip_address` = '162.142.125.54' 
 Execution Time:0.0024840831756592

SHOW TABLES FROM `ospos` 
 Execution Time:0.00063800811767578

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029397010803223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022792816162109

SELECT GET_LOCK('7485308260e814d323e5717eac98a0ed', 300) AS ci_session_lock 
 Execution Time:0.00025081634521484

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'lu09eonojk4v3qosaj2t453lvt6mclis'
AND `ip_address` = '192.241.222.91' 
 Execution Time:0.0021548271179199

SHOW TABLES FROM `ospos` 
 Execution Time:0.0006718635559082

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0002899169921875

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002291202545166

SELECT GET_LOCK('b99c57dc44e4bf71d5d5ef1ce7e82e3f', 300) AS ci_session_lock 
 Execution Time:0.00022602081298828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ccml899b528bhhjhkoh3hd19sa5lpfek'
AND `ip_address` = '192.241.223.31' 
 Execution Time:0.0014681816101074

SHOW TABLES FROM `ospos` 
 Execution Time:0.00078988075256348

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015592575073242

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00036501884460449

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002448558807373

SELECT GET_LOCK('ddca9876b1956ca7859c7b6c6e360545', 300) AS ci_session_lock 
 Execution Time:0.00031590461730957

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'amqk40cb926m9feq5ma4mhvectjfcssn'
AND `ip_address` = '134.209.76.15' 
 Execution Time:0.0023059844970703

SHOW TABLES FROM `ospos` 
 Execution Time:0.00076603889465332

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001528263092041

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029611587524414

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002140998840332

SELECT GET_LOCK('3c46d15342b85335852739bb47e9c18a', 300) AS ci_session_lock 
 Execution Time:0.00032210350036621

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '3dkp9ln1sdu412kdi4rfbukq3qk9a7uk'
AND `ip_address` = '35.246.217.83' 
 Execution Time:0.0036249160766602

SHOW TABLES FROM `ospos` 
 Execution Time:0.0009160041809082

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021004676818848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043201446533203

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023388862609863

SELECT GET_LOCK('0a49af8631724c3bebf9b656d991adf9', 300) AS ci_session_lock 
 Execution Time:0.00028491020202637

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'jkh235ameemeldakncqj7vu4svkcqfbd'
AND `ip_address` = '157.230.143.29' 
 Execution Time:0.0022568702697754

SHOW TABLES FROM `ospos` 
 Execution Time:0.00082993507385254

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00038695335388184

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022411346435547

SELECT GET_LOCK('94d30f9720fd3ae7285e7dc5025df0eb', 300) AS ci_session_lock 
 Execution Time:0.00023889541625977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'jlpu8jnm750o9fnnfilcbsd49r8ehej6'
AND `ip_address` = '45.155.205.108' 
 Execution Time:0.0019590854644775

SHOW TABLES FROM `ospos` 
 Execution Time:0.0006258487701416

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021600723266602

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031590461730957

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022387504577637

SELECT GET_LOCK('233d5bc6e06a54b00e4c48145b6c8fb2', 300) AS ci_session_lock 
 Execution Time:0.00023198127746582

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'alsmoplmnqhbt9mb424q7d3qih0trrio'
AND `ip_address` = '45.155.205.108' 
 Execution Time:0.0021100044250488

SHOW TABLES FROM `ospos` 
 Execution Time:0.00058484077453613

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031399726867676

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022697448730469

SELECT GET_LOCK('8b54cc2de3cabb59a794de39b9e987e9', 300) AS ci_session_lock 
 Execution Time:0.00033807754516602

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'c3i6mq9o1o0slk9a12dhc7gmajh5s3kh'
AND `ip_address` = '45.155.205.108' 
 Execution Time:0.0037181377410889

SHOW TABLES FROM `ospos` 
 Execution Time:0.0010139942169189

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001981258392334

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00042986869812012

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00036883354187012

SELECT GET_LOCK('431af73ec2df27d08066368a9fce2c00', 300) AS ci_session_lock 
 Execution Time:0.00023889541625977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rm7k6dta0viojchi118tk724j981si1h'
AND `ip_address` = '170.130.187.18' 
 Execution Time:0.0022211074829102

SHOW TABLES FROM `ospos` 
 Execution Time:0.00063014030456543

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029397010803223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021600723266602

SELECT GET_LOCK('93c4bb6b60730f0db34328ea6ac08f50', 300) AS ci_session_lock 
 Execution Time:0.00033211708068848

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '28nmpnb0hh414jk6l13t1asuah22ofu1'
AND `ip_address` = '183.136.225.56' 
 Execution Time:0.0024139881134033

SHOW TABLES FROM `ospos` 
 Execution Time:0.00079989433288574

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00059986114501953

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00025081634521484

SELECT GET_LOCK('dc50952140b72ab936eeebc759a07b67', 300) AS ci_session_lock 
 Execution Time:0.00041890144348145

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'nbek9qrla5a56ej2pgi4vovvdemulbuu'
AND `ip_address` = '119.29.194.178' 
 Execution Time:0.0034239292144775

SHOW TABLES FROM `ospos` 
 Execution Time:0.00094819068908691

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020480155944824

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00051093101501465

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00025796890258789

SELECT GET_LOCK('0dc69d4fdf9300f190fc66677759082a', 300) AS ci_session_lock 
 Execution Time:0.00019001960754395

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'u9jfnovp3h8ht30fafijmmi4uthvtgii'
AND `ip_address` = '119.29.194.178' 
 Execution Time:0.0019421577453613

SHOW TABLES FROM `ospos` 
 Execution Time:0.00055718421936035

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00025415420532227

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00019407272338867

SELECT GET_LOCK('5bbe72b81129f578aa3f8fdfa28db79f', 300) AS ci_session_lock 
 Execution Time:0.00028896331787109

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ikjnt1coo8kjes3td549p80s9jc9shhj'
AND `ip_address` = '119.29.194.178' 
 Execution Time:0.0024170875549316

SHOW TABLES FROM `ospos` 
 Execution Time:0.00062108039855957

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016403198242188

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00039410591125488

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00019502639770508

SELECT GET_LOCK('c2b16d6cb48c2e601679b1f42a9cb2ce', 300) AS ci_session_lock 
 Execution Time:0.0002448558807373

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0vnec29u1r95l19tbboc6u6pdqgb75nf'
AND `ip_address` = '92.118.161.53' 
 Execution Time:0.0020461082458496

SHOW TABLES FROM `ospos` 
 Execution Time:0.0007328987121582

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029897689819336

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00027608871459961

SELECT GET_LOCK('87f07ee74ade86ee3c41ebc4318690f6', 300) AS ci_session_lock 
 Execution Time:0.00026988983154297

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'hvnqs8dcp87m1qmuiiulqrneefpuf92d'
AND `ip_address` = '184.105.247.252' 
 Execution Time:0.0022590160369873

SHOW TABLES FROM `ospos` 
 Execution Time:0.00076103210449219

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018405914306641

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034308433532715

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00032591819763184

SELECT GET_LOCK('b02567f9598aac863472930db2911787', 300) AS ci_session_lock 
 Execution Time:0.00032496452331543

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'jqjkuhrrum46cgeulol3in12b6qoc1it'
AND `ip_address` = '177.127.113.10' 
 Execution Time:0.002161979675293

SHOW TABLES FROM `ospos` 
 Execution Time:0.00073099136352539

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016093254089355

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030994415283203

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00026392936706543

SELECT GET_LOCK('60c38f3bd2090f54594861fc665eb84b', 300) AS ci_session_lock 
 Execution Time:0.00031304359436035

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qv0ik398mddpr4h70suhslnjfdgoous4'
AND `ip_address` = '162.142.125.56' 
 Execution Time:0.0025520324707031

SHOW TABLES FROM `ospos` 
 Execution Time:0.00072216987609863

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031113624572754

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002448558807373

SELECT GET_LOCK('a918ea1e955ae7038a62891e0f0e558b', 300) AS ci_session_lock 
 Execution Time:0.0002589225769043

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '28ofa721e97akbgii8ugunt83v8h6712'
AND `ip_address` = '162.142.125.56' 
 Execution Time:0.003026008605957

SHOW TABLES FROM `ospos` 
 Execution Time:0.00067400932312012

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00045990943908691

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00025391578674316

SELECT GET_LOCK('b2c96005829ea6d2d368b55ce02e953a', 300) AS ci_session_lock 
 Execution Time:0.00033187866210938

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rqc1ssg5jaq8bp3kqepc4isl5i793d73'
AND `ip_address` = '34.254.60.47' 
 Execution Time:0.0025351047515869

SHOW TABLES FROM `ospos` 
 Execution Time:0.00077605247497559

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017786026000977

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031018257141113

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022292137145996

SELECT GET_LOCK('604ff9bd0578884734f77905f276078c', 300) AS ci_session_lock 
 Execution Time:0.00027799606323242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'auvs3ggqr2d4m45o0niivmu0ai2n75ne'
AND `ip_address` = '192.35.168.32' 
 Execution Time:0.0021979808807373

SHOW TABLES FROM `ospos` 
 Execution Time:0.00082111358642578

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030088424682617

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022315979003906

SELECT GET_LOCK('33aef89275fe5f33054c70ad837699fb', 300) AS ci_session_lock 
 Execution Time:0.00029706954956055

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0030529499053955

SHOW TABLES FROM `ospos` 
 Execution Time:0.00088310241699219

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021886825561523

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031805038452148

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00029087066650391

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0018489360809326

SELECT GET_LOCK('33aef89275fe5f33054c70ad837699fb', 300) AS ci_session_lock 
 Execution Time:0.00023484230041504

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0020260810852051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023698806762695

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00019001960754395

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00024008750915527

SHOW TABLES FROM `ospos` 
 Execution Time:0.00063204765319824

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020790100097656

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030112266540527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029397010803223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019216537475586

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021004676818848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021600723266602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019216537475586

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0019490718841553

SELECT GET_LOCK('33aef89275fe5f33054c70ad837699fb', 300) AS ci_session_lock 
 Execution Time:0.00028300285339355

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0021538734436035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027894973754883

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019288063049316

SHOW TABLES FROM `ospos` 
 Execution Time:0.0010330677032471

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00019717216491699

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00033187866210938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031709671020508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001838207244873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023388862609863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002281665802002

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00017213821411133

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:0.0001678466796875

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00015497207641602

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0012850761413574

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010199546813965

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018405914306641

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00019192695617676

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0019199848175049

SELECT GET_LOCK('33aef89275fe5f33054c70ad837699fb', 300) AS ci_session_lock 
 Execution Time:0.00027298927307129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0019621849060059

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023603439331055

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018906593322754

SHOW TABLES FROM `ospos` 
 Execution Time:0.00077700614929199

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015521049499512

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00035405158996582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027704238891602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001838207244873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018191337585449

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%Vi%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0047979354858398

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%Vi%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.002701997756958

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%Vi%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00016093254089355

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0019590854644775

SELECT GET_LOCK('33aef89275fe5f33054c70ad837699fb', 300) AS ci_session_lock 
 Execution Time:0.00023698806762695

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0021200180053711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019717216491699

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00022506713867188

SHOW TABLES FROM `ospos` 
 Execution Time:0.00080490112304688

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001521110534668

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023484230041504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031805038452148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021100044250488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021600723266602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '194'
OR `ospos_items`.`item_id` = 194
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.00086688995361328

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND `item_id` = 194
AND definition_flags &  2 
 Execution Time:0.00089097023010254

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '194'
AND `location_id` = '1' 
 Execution Time:0.00034403800964355

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.0012650489807129

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '194'
OR `ospos_items`.`item_id` = 194
 )
 LIMIT 1 
 Execution Time:0.00064206123352051

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '194'
AND `location_id` = '1' 
 Execution Time:0.00017809867858887

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00023698806762695

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '194' 
 Execution Time:0.00035309791564941

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00015401840209961

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00092506408691406

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00094509124755859

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '194' 
 Execution Time:0.0001988410949707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024008750915527

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00019717216491699

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0021848678588867

SELECT GET_LOCK('33aef89275fe5f33054c70ad837699fb', 300) AS ci_session_lock 
 Execution Time:0.00024104118347168

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0039341449737549

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00070500373840332

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00024104118347168

SHOW TABLES FROM `ospos` 
 Execution Time:0.00086402893066406

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021600723266602

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026512145996094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003049373626709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017189979553223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.0002131462097168

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00026512145996094

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '194' 
 Execution Time:0.00014615058898926

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014090538024902

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0012719631195068

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0011110305786133

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '194' 
 Execution Time:0.00014185905456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00014019012451172

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00016093254089355

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0021281242370605

SELECT GET_LOCK('33aef89275fe5f33054c70ad837699fb', 300) AS ci_session_lock 
 Execution Time:0.00026607513427734

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'q1pboombuj0katmlpv90abq9fapcj2qm'
AND `ip_address` = '186.11.4.73' 
 Execution Time:0.0021932125091553

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022697448730469

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00022292137145996

SHOW TABLES FROM `ospos` 
 Execution Time:0.00065183639526367

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022006034851074

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00020098686218262

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026917457580566

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00015592575073242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042009353637695

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00017786026000977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0001678466796875

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014305114746094

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.001194953918457

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010778903961182

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '194' 
 Execution Time:0.00013995170593262

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00025296211242676

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2021-02-23 10:28:01', NULL, '1', '', 0, NULL, NULL, NULL, NULL, 0) 
 Execution Time:0.00047492980957031

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `employee_id`) VALUES (232, 'Efectivo', 3000, 0, '1') 
 Execution Time:0.00035500526428223

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00024104118347168

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00021696090698242

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0014150142669678

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00091791152954102

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '194'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.00080204010009766

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (232, '194', 1, '', '', 1, '0', '0', '1.99', '3000.00', '1', 0) 
 Execution Time:0.00037312507629395

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '194'
AND `location_id` = '1' 
 Execution Time:0.00029587745666504

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.00096607208251953

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '194'
AND `location_id` = '1' 
 Execution Time:0.00014710426330566

INSERT INTO `ospos_item_quantities` (`quantity`, `item_id`, `location_id`) VALUES (-1, '194', '1') 
 Execution Time:0.00035810470581055

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2021-02-23 10:28:01', '194', '1', '1', 'POS 232', -1) 
 Execution Time:0.00031208992004395

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			  SELECT '194', definition_id, attribute_id, 232
			  FROM ospos_attribute_links
			  WHERE item_id = '194' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.00057482719421387

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00023198127746582

SELECT GET_LOCK('2d8f375eaeffe706abf8e68e1dbc444c', 300) AS ci_session_lock 
 Execution Time:0.00029897689819336

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dggcmq0vg3rrl5ipcq92mv88p9p78j55'
AND `ip_address` = '172.245.10.102' 
 Execution Time:0.0034868717193604

SHOW TABLES FROM `ospos` 
 Execution Time:0.0010092258453369

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00019311904907227

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0005040168762207

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00034189224243164

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.000244140625

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0023338794708252

SHOW TABLES FROM `ospos` 
 Execution Time:0.00063109397888184

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029683113098145

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00025701522827148

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0029330253601074

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00032711029052734

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0028619766235352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025200843811035

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019502639770508

SHOW TABLES FROM `ospos` 
 Execution Time:0.00064706802368164

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023984909057617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00037813186645508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018215179443359

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0023019313812256

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00022196769714355

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0021190643310547

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021791458129883

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019001960754395

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066685676574707

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020384788513184

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00028014183044434

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002748966217041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002291202545166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00017189979553223

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:0.00019407272338867

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00020813941955566

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00017905235290527

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0013558864593506

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010590553283691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024199485778809

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00014185905456543

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00015497207641602

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0020270347595215

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00021505355834961

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0023109912872314

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018882751464844

SHOW TABLES FROM `ospos` 
 Execution Time:0.00061702728271484

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00022101402282715

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00035500526428223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017619132995605

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017189979553223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%vi%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0041449069976807

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%vi%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.0026099681854248

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%vi%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00020194053649902

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.003040075302124

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00028491020202637

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0033140182495117

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020623207092285

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00021100044250488

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066089630126953

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00035810470581055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026297569274902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021219253540039

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '442'
OR `ospos_items`.`item_id` = 442
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.0010170936584473

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND `item_id` = 442
AND definition_flags &  2 
 Execution Time:0.00079607963562012

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '442'
AND `location_id` = '1' 
 Execution Time:0.00054216384887695

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.0011088848114014

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '442'
OR `ospos_items`.`item_id` = 442
 )
 LIMIT 1 
 Execution Time:0.00070500373840332

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '442'
AND `location_id` = '1' 
 Execution Time:0.00015497207641602

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.00089287757873535

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00016617774963379

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '442' 
 Execution Time:0.00036096572875977

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00019216537475586

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00015711784362793

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00095295906066895

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00097823143005371

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '442' 
 Execution Time:0.00016117095947266

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019717216491699

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001828670501709

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0001518726348877

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00016212463378906

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0018579959869385

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00023102760314941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0020220279693604

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023794174194336

SHOW TABLES FROM `ospos` 
 Execution Time:0.0006718635559082

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00025105476379395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031018257141113

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00032496452331543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0034170150756836

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024700164794922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017786026000977

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00017714500427246

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00016117095947266

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '442' 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00017189979553223

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014495849609375

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0012190341949463

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00094795227050781

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '442' 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019693374633789

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00015783309936523

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0019111633300781

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00023293495178223

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0022010803222656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024318695068359

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019001960754395

SHOW TABLES FROM `ospos` 
 Execution Time:0.00072312355041504

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00021791458129883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024199485778809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025105476379395

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0002291202545166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00015401840209961

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0013129711151123

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010671615600586

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '442' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00035285949707031

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2021-02-23 10:41:47', NULL, '1', '', 0, NULL, NULL, NULL, NULL, 0) 
 Execution Time:0.00066304206848145

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `employee_id`) VALUES (233, 'Efectivo', 4500, 0, '1') 
 Execution Time:0.0007169246673584

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00019717216491699

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00019717216491699

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0013768672943115

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010910034179688

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '442'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.00091886520385742

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (233, '442', 1, '', '', 1, '0', '0', '2.99', '4500.00', '1', 0) 
 Execution Time:0.00048589706420898

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '442'
AND `location_id` = '1' 
 Execution Time:0.0004279613494873

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.0010318756103516

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '442'
AND `location_id` = '1' 
 Execution Time:0.00016403198242188

INSERT INTO `ospos_item_quantities` (`quantity`, `item_id`, `location_id`) VALUES (-1, '442', '1') 
 Execution Time:0.00032401084899902

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2021-02-23 10:41:47', '442', '1', '1', 'POS 233', -1) 
 Execution Time:0.0003659725189209

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			  SELECT '442', definition_id, attribute_id, 233
			  FROM ospos_attribute_links
			  WHERE item_id = '442' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.00067305564880371

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00023388862609863

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0022180080413818

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.0002741813659668

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0029780864715576

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021791458129883

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023198127746582

SHOW TABLES FROM `ospos` 
 Execution Time:0.00082612037658691

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020599365234375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029516220092773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031709671020508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019288063049316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019001960754395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025296211242676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025391578674316

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00017881393432617

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0001828670501709

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00020503997802734

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00021791458129883

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0016400814056396

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010190010070801

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025010108947754

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00020408630371094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023889541625977

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00016903877258301

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0018730163574219

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00025296211242676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0022950172424316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017499923706055

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066518783569336

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00029397010803223

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00021719932556152

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023412704467773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016617774963379

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023293495178223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016617774963379

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016999244689941

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%c%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.010499954223633

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%c%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.0028128623962402

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%c%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00017285346984863

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0018801689147949

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00021481513977051

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0018661022186279

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018215179443359

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017499923706055

SHOW TABLES FROM `ospos` 
 Execution Time:0.0006411075592041

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014114379882812

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00021815299987793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026702880859375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001678466796875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016999244689941

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%chan%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0033948421478271

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%chan%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.002485990524292

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%chan%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0003669261932373

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0025119781494141

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00030708312988281

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.002194881439209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027108192443848

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00019288063049316

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00028085708618164

SHOW TABLES FROM `ospos` 
 Execution Time:0.001244068145752

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021600723266602

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00033092498779297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00032210350036621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018596649169922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002140998840332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018477439880371

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '225'
OR `ospos_items`.`item_id` = 225
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.00088405609130859

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND `item_id` = 225
AND definition_flags &  2 
 Execution Time:0.00078797340393066

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00020408630371094

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '225'
AND `location_id` = '1' 
 Execution Time:0.00039100646972656

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.0010809898376465

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '225'
OR `ospos_items`.`item_id` = 225
 )
 LIMIT 1 
 Execution Time:0.00064587593078613

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '225'
AND `location_id` = '1' 
 Execution Time:0.0001528263092041

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.0010321140289307

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '225' 
 Execution Time:0.0004119873046875

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00019383430480957

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00016093254089355

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.00095295906066895

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010809898376465

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '225' 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00015592575073242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00021600723266602

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0019540786743164

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.0002448558807373

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0021610260009766

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022792816162109

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0001838207244873

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00020790100097656

SHOW TABLES FROM `ospos` 
 Execution Time:0.00077915191650391

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00028610229492188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022101402282715

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019192695617676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '225' 
 Execution Time:0.00019288063049316

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00017809867858887

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.0001521110534668

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0013248920440674

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00096011161804199

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '225' 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023722648620605

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001680850982666

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00018692016601562

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0021331310272217

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00028014183044434

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0025420188903809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023508071899414

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0001828670501709

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00026798248291016

SHOW TABLES FROM `ospos` 
 Execution Time:0.00072717666625977

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017213821411133

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00040006637573242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025200843811035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018692016601562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016093254089355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00018405914306641

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00022196769714355

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0014538764953613

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00098204612731934

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '225' 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00020599365234375

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2021-02-23 10:42:46', NULL, '1', '', 0, NULL, NULL, NULL, NULL, 0) 
 Execution Time:0.00046515464782715

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `employee_id`) VALUES (234, 'Efectivo', 1100, 0, '1') 
 Execution Time:0.00026798248291016

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00029420852661133

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0011188983917236

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.001133918762207

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '225'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.00081181526184082

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (234, '225', 1, '', '', 1, '0', '0', '808.00', '1100.00', '1', 0) 
 Execution Time:0.00038290023803711

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '225'
AND `location_id` = '1' 
 Execution Time:0.00031495094299316

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.00094795227050781

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '225'
AND `location_id` = '1' 
 Execution Time:0.00017499923706055

INSERT INTO `ospos_item_quantities` (`quantity`, `item_id`, `location_id`) VALUES (-1, '225', '1') 
 Execution Time:0.00030899047851562

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2021-02-23 10:42:46', '225', '1', '1', 'POS 234', -1) 
 Execution Time:0.00030708312988281

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			  SELECT '225', definition_id, attribute_id, 234
			  FROM ospos_attribute_links
			  WHERE item_id = '225' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.00046896934509277

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00017690658569336

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0026781558990479

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00023913383483887

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0026938915252686

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023102760314941

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015115737915039

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'office!_%' ESCAPE '!' 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017499923706055

SHOW TABLES FROM `ospos` 
 Execution Time:0.00074911117553711

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014090538024902

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00024199485778809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026988983154297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017714500427246

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021100044250488

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.00288987159729

SELECT GET_LOCK('09df41bf9ad4ffe10b90c6f2cde9e600', 300) AS ci_session_lock 
 Execution Time:0.00031399726867676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'rnpenufl8e1oqru63akru2kloojv6ni4'
AND `ip_address` = '143.255.176.143' 
 Execution Time:0.0038061141967773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034689903259277

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00021505355834961

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00020599365234375

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00024509429931641

SHOW TABLES FROM `ospos` 
 Execution Time:0.0012819766998291

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020503997802734

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00037693977355957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00039219856262207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027704238891602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002748966217041

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025296211242676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024795532226562

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.0002751350402832

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.00017714500427246

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.00018405914306641

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.00022602081298828

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:0.00022411346435547

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00022196769714355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028300285339355

SELECT GET_LOCK('baf9b9d96ea6c89b21e2d3ec8c459bf7', 300) AS ci_session_lock 
 Execution Time:0.00023794174194336

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bkoenujuda1hfra0fbumd2tdavgja81r'
AND `ip_address` = '34.96.130.21' 
 Execution Time:0.0020699501037598

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066208839416504

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022697448730469

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00032305717468262

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00025200843811035

SELECT GET_LOCK('c4dc4b70f861b455329f8650efc2b086', 300) AS ci_session_lock 
 Execution Time:0.00027704238891602

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'k9rp6f9hj5c6hc2ppahslrholplq3adb'
AND `ip_address` = '18.167.80.69' 
 Execution Time:0.0021219253540039

SHOW TABLES FROM `ospos` 
 Execution Time:0.00085592269897461

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030803680419922

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00033092498779297

SELECT GET_LOCK('c4f82c98031bd7b39c91f1f01b1b10ba', 300) AS ci_session_lock 
 Execution Time:0.0002448558807373

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'cu91olu4vmgth68354rg8fhqmnjpu5og'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0022330284118652

SHOW TABLES FROM `ospos` 
 Execution Time:0.00074005126953125

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001680850982666

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029397010803223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00024914741516113

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'cu91olu4vmgth68354rg8fhqmnjpu5og'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0021238327026367

SELECT GET_LOCK('c4f82c98031bd7b39c91f1f01b1b10ba', 300) AS ci_session_lock 
 Execution Time:0.00024890899658203

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'cu91olu4vmgth68354rg8fhqmnjpu5og'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0024669170379639

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024318695068359

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018405914306641

SHOW TABLES FROM `ospos` 
 Execution Time:0.00069904327392578

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013399124145508

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023293495178223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028204917907715

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00030398368835449

SELECT GET_LOCK('00e518a9c9e304b36534094c51cff5c5', 300) AS ci_session_lock 
 Execution Time:0.00031805038452148

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qocl36r8em0odrkosd8t9hqq7sepulq2'
AND `ip_address` = '163.172.68.26' 
 Execution Time:0.003507137298584

SHOW TABLES FROM `ospos` 
 Execution Time:0.001046895980835

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020909309387207

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00040388107299805

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00025105476379395

SELECT GET_LOCK('333b12ee12675000ad9ec14d5d9f465f', 300) AS ci_session_lock 
 Execution Time:0.00031518936157227

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '7n4rd4v7ogkscmieqlanrcebrg5iumlm'
AND `ip_address` = '165.227.77.169' 
 Execution Time:0.0026199817657471

SHOW TABLES FROM `ospos` 
 Execution Time:0.00089907646179199

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034403800964355

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00028204917907715

SELECT GET_LOCK('152edcada3e14522eee1267fe79f5e3a', 300) AS ci_session_lock 
 Execution Time:0.00026702880859375

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'h1mcioft0jevonkhmhgu1jlh957rmiil'
AND `ip_address` = '45.201.187.214' 
 Execution Time:0.0024428367614746

SHOW TABLES FROM `ospos` 
 Execution Time:0.00091099739074707

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015616416931152

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029397010803223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00026202201843262

SELECT GET_LOCK('612e935f89ded9b475edb9d1a531bebe', 300) AS ci_session_lock 
 Execution Time:0.00030398368835449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qut0m6am8mrhqkn4fqbh8jp6vpb0kha8'
AND `ip_address` = '2.57.122.97' 
 Execution Time:0.0023519992828369

SHOW TABLES FROM `ospos` 
 Execution Time:0.00088596343994141

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034809112548828

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023412704467773

SELECT GET_LOCK('00602a005874602d33707a6ffd8e9dc8', 300) AS ci_session_lock 
 Execution Time:0.00025391578674316

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ugltf5c5mjb0pbkvsc0omj93n0p92vl4'
AND `ip_address` = '103.99.3.216' 
 Execution Time:0.0033950805664062

SHOW TABLES FROM `ospos` 
 Execution Time:0.0013458728790283

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021100044250488

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00040507316589355

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023293495178223

SELECT GET_LOCK('5dac94dc884174f1c50879baaa2e0bc6', 300) AS ci_session_lock 
 Execution Time:0.00026988983154297

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2712vuocgn0tb7g7de25guped04qv5ur'
AND `ip_address` = '45.155.205.108' 
 Execution Time:0.0022470951080322

SHOW TABLES FROM `ospos` 
 Execution Time:0.00085091590881348

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015592575073242

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00038385391235352

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021100044250488

SELECT GET_LOCK('9fe8b72a7214ea2f480fd3093a7d4b85', 300) AS ci_session_lock 
 Execution Time:0.00032496452331543

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'euo9c1ug2i8kqcp8r4vkt88inbtpsamg'
AND `ip_address` = '45.155.205.108' 
 Execution Time:0.0035741329193115

SHOW TABLES FROM `ospos` 
 Execution Time:0.0007331371307373

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020599365234375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030112266540527

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0003199577331543

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00023603439331055

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0020980834960938

SHOW TABLES FROM `ospos` 
 Execution Time:0.00079107284545898

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003960132598877

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023007392883301

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.00193190574646

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00023889541625977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0022130012512207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00024700164794922

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00027704238891602

SHOW TABLES FROM `ospos` 
 Execution Time:0.00077700614929199

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017786026000977

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030994415283203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00030112266540527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00019216537475586

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00019407272338867

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018715858459473

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00019693374633789

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0025010108947754

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00025796890258789

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0020501613616943

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00030207633972168

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023984909057617

SHOW TABLES FROM `ospos` 
 Execution Time:0.0007011890411377

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00024604797363281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00022292137145996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018405914306641

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018715858459473

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00020694732666016

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:0.00021600723266602

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0001988410949707

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00016307830810547

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0013470649719238

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0011298656463623

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018692016601562

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00015020370483398

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018215179443359

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00015115737915039

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00016403198242188

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0022661685943604

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00023818016052246

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0021460056304932

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00021219253540039

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00016117095947266

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0002739429473877

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070691108703613

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00028300285339355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00037002563476562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00023102760314941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00023388862609863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00022292137145996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00024700164794922

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%b%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.011888980865479

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%b%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.005202054977417

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%b%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00025677680969238

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0027270317077637

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00029397010803223

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0033559799194336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00027322769165039

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00020098686218262

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00022196769714355

SHOW TABLES FROM `ospos` 
 Execution Time:0.00092506408691406

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.003119945526123

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00033187866210938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0003659725189209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0002291202545166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00027012825012207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0002291202545166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00024199485778809

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '52'
OR `ospos_items`.`item_id` = 52
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.0012919902801514

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND `item_id` = 52
AND definition_flags &  2 
 Execution Time:0.0011100769042969

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00033307075500488

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '52'
AND `location_id` = '1' 
 Execution Time:0.00047111511230469

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.0017461776733398

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '52'
OR `ospos_items`.`item_id` = 52
 )
 LIMIT 1 
 Execution Time:0.0010030269622803

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '52'
AND `location_id` = '1' 
 Execution Time:0.00022077560424805

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.00154709815979

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00022506713867188

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '52' 
 Execution Time:0.00065016746520996

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00028204917907715

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00021481513977051

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0017011165618896

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0016560554504395

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '52' 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00048995018005371

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00035905838012695

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0002131462097168

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00029087066650391

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0024528503417969

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00025415420532227

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0019090175628662

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00029802322387695

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0002439022064209

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070691108703613

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034880638122559

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00026702880859375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00021719932556152

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016021728515625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '52'
OR `ospos_items`.`item_id` = 52
 )
 LIMIT 1 
 Execution Time:0.00020003318786621

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '52'
AND `location_id` = '1' 
 Execution Time:0.00015401840209961

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.0012729167938232

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '52' 
 Execution Time:0.00013589859008789

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00026488304138184

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014090538024902

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0010290145874023

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0011248588562012

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '52' 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00020813941955566

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00017881393432617

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0001680850982666

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.0001981258392334

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0019891262054443

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00021910667419434

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0020380020141602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00023508071899414

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018596649169922

SHOW TABLES FROM `ospos` 
 Execution Time:0.00094294548034668

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00030779838562012

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026679039001465

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00021982192993164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00023698806762695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00022292137145996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00024318695068359

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00022697448730469

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '52' 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00028419494628906

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014495849609375

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0016429424285889

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010230541229248

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '52' 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00023293495178223

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00026798248291016

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0027410984039307

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00044107437133789

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0035209655761719

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.0001988410949707

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019598007202148

SHOW TABLES FROM `ospos` 
 Execution Time:0.0011560916900635

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00020599365234375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0003659725189209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00022387504577637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00021910667419434

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00021815299987793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0001981258392334

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00024104118347168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00022077560424805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00021886825561523

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00030803680419922

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00019407272338867

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0017390251159668

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.001849889755249

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '52' 
 Execution Time:0.00020599365234375

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00036787986755371

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2021-02-23 17:02:21', NULL, '3', '', 0, NULL, NULL, NULL, NULL, 0) 
 Execution Time:0.00086212158203125

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `employee_id`) VALUES (235, 'Efectivo', 9000, 0, '3') 
 Execution Time:0.00043106079101562

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00030422210693359

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00022482872009277

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0017070770263672

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0016381740570068

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '52'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.00124192237854

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (235, '52', 1, '', '', 9, '0', '0', '700.00', 1000, '1', 0) 
 Execution Time:0.00066399574279785

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '52'
AND `location_id` = '1' 
 Execution Time:0.00046086311340332

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.0013360977172852

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '52'
AND `location_id` = '1' 
 Execution Time:0.0001828670501709

INSERT INTO `ospos_item_quantities` (`quantity`, `item_id`, `location_id`) VALUES (-9, '52', '1') 
 Execution Time:0.00043201446533203

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2021-02-23 17:02:21', '52', '3', '1', 'POS 235', -9) 
 Execution Time:0.00046801567077637

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			  SELECT '52', definition_id, attribute_id, 235
			  FROM ospos_attribute_links
			  WHERE item_id = '52' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.0010111331939697

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00022101402282715

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0021510124206543

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.0002598762512207

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0030441284179688

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00026798248291016

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00016689300537109

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00025701522827148

SHOW TABLES FROM `ospos` 
 Execution Time:0.0007481575012207

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00029301643371582

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0004889965057373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00028896331787109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00020313262939453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00022697448730469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00020003318786621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00023078918457031

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00020599365234375

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00026702880859375

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00020098686218262

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0013799667358398

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010011196136475

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00023007392883301

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00017189979553223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00025701522827148

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00019693374633789

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00024795532226562

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0023469924926758

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.0002439022064209

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0022149085998535

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017905235290527

SHOW TABLES FROM `ospos` 
 Execution Time:0.00065302848815918

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022602081298828

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00022101402282715

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0002892017364502

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017809867858887

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018310546875

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%v%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.005648136138916

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%v%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.0027868747711182

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%v%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00016999244689941

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0014779567718506

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00020003318786621

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0014309883117676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00011587142944336

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00013899803161621

SHOW TABLES FROM `ospos` 
 Execution Time:0.00052499771118164

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00011086463928223

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00016880035400391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0002138614654541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00012803077697754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00014615058898926

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00013589859008789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00014591217041016

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%vi%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0002901554107666

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%vi%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%vi%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00011301040649414

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0028409957885742

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00038290023803711

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0021178722381592

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00030207633972168

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00019693374633789

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00024604797363281

SHOW TABLES FROM `ospos` 
 Execution Time:0.00091195106506348

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018787384033203

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00032711029052734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00028014183044434

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '202'
OR `ospos_items`.`item_id` = 202
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.00087404251098633

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND `item_id` = 202
AND definition_flags &  2 
 Execution Time:0.00091004371643066

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014781951904297

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '202'
AND `location_id` = '1' 
 Execution Time:0.00033187866210938

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '202'
OR `ospos_items`.`item_id` = 202
 )
 LIMIT 1 
 Execution Time:0.0006101131439209

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '202'
AND `location_id` = '1' 
 Execution Time:0.00014185905456543

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00016403198242188

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00036287307739258

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00019407272338867

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014996528625488

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0011799335479736

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00092411041259766

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00016403198242188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00014090538024902

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00016593933105469

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0019409656524658

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00022101402282715

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0024361610412598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017118453979492

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019001960754395

SHOW TABLES FROM `ospos` 
 Execution Time:0.00062012672424316

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014090538024902

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00019192695617676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00026583671569824

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015807151794434

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00021696090698242

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00017809867858887

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014400482177734

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0012431144714355

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00099992752075195

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00017786026000977

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0027399063110352

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00021791458129883

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0019581317901611

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016689300537109

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017094612121582

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066208839416504

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00019001960754395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00023484230041504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00021481513977051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015377998352051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00021505355834961

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.0001528263092041

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00013399124145508

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00013899803161621

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.001223087310791

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00090193748474121

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00013494491577148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018882751464844

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00015592575073242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00013399124145508

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00020289421081543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0019600391387939

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00021195411682129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0033609867095947

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00016307830810547

SHOW TABLES FROM `ospos` 
 Execution Time:0.00058507919311523

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00059700012207031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017809867858887

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016093254089355

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00016021728515625

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00013494491577148

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00016379356384277

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00013995170593262

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0012409687042236

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00097203254699707

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00013184547424316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00013399124145508

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00014615058898926

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0017979145050049

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00022602081298828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.002140998840332

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018692016601562

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00014114379882812

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00016403198242188

SHOW TABLES FROM `ospos` 
 Execution Time:0.00061321258544922

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013995170593262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00019192695617676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00031900405883789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00020217895507812

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015592575073242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015807151794434

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00020909309387207

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00022387504577637

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014090538024902

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0011770725250244

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00098586082458496

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015616416931152

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00013399124145508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0002899169921875

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00018811225891113

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0022850036621094

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00020885467529297

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0022740364074707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00016903877258301

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066804885864258

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014686584472656

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00020909309387207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00032901763916016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017714500427246

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00020909309387207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0001828670501709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017404556274414

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%b%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00063109397888184

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%b%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.00027990341186523

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%b%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00016593933105469

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0020267963409424

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.0002129077911377

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0019280910491943

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023698806762695

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066089630126953

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026488304138184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00036001205444336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017786026000977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016212463378906

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '42'
OR `ospos_items`.`item_id` = 42
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.0011680126190186

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND `item_id` = 42
AND definition_flags &  2 
 Execution Time:0.0009458065032959

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014781951904297

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '42'
AND `location_id` = '1' 
 Execution Time:0.00031495094299316

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.001093864440918

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '42'
OR `ospos_items`.`item_id` = 42
 )
 LIMIT 1 
 Execution Time:0.0005340576171875

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '42'
AND `location_id` = '1' 
 Execution Time:0.00016188621520996

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.00082302093505859

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00018405914306641

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00015616416931152

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '42' 
 Execution Time:0.00035500526428223

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00022101402282715

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014996528625488

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0010590553283691

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010988712310791

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '42' 
 Execution Time:0.00015687942504883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00017213821411133

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0022110939025879

SELECT GET_LOCK('8765c07efc0e7686e0235964c83390e7', 300) AS ci_session_lock 
 Execution Time:0.00022292137145996

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0021209716796875

UPDATE `ospos_sessions` SET `timestamp` = 1614117883, `data` = '__ci_last_regenerate|i:1614117883;person_id|s:1:\"3\";menu_group|s:4:\"home\";allow_temp_items|i:1;sale_id|i:-1;sales_location|s:1:\"1\";sales_cart|a:2:{i:1;a:25:{s:7:\"item_id\";s:3:\"202\";s:13:\"item_location\";s:1:\"1\";s:10:\"stock_name\";s:20:\"Tienda Santo Domingo\";s:4:\"line\";i:1;s:4:\"name\";s:63:\"Botellon Gran Edicion 120 Cabernet Sauvignon / Carmenere 1500cc\";s:11:\"item_number\";s:13:\"7804330001996\";s:16:\"attribute_values\";N;s:18:\"attribute_dtvalues\";N;s:11:\"description\";s:0:\"\";s:12:\"serialnumber\";s:0:\"\";s:21:\"allow_alt_description\";s:1:\"0\";s:13:\"is_serialized\";s:1:\"0\";s:8:\"quantity\";i:1;s:8:\"discount\";s:1:\"0\";s:13:\"discount_type\";s:1:\"0\";s:8:\"in_stock\";s:6:\"-1.000\";s:5:\"price\";s:7:\"2750.00\";s:10:\"cost_price\";s:4:\"2.00\";s:5:\"total\";s:7:\"2750.00\";s:16:\"discounted_total\";s:7:\"2750.00\";s:12:\"print_option\";i:0;s:10:\"stock_type\";s:1:\"0\";s:9:\"item_type\";s:1:\"0\";s:8:\"hsn_code\";s:0:\"\";s:15:\"tax_category_id\";s:1:\"0\";}i:2;a:25:{s:7:\"item_id\";s:2:\"42\";s:13:\"item_location\";s:1:\"1\";s:10:\"stock_name\";s:20:\"Tienda Santo Domingo\";s:4:\"line\";i:2;s:4:\"name\";s:24:\"Alfajor Bon O Bon Blanco\";s:11:\"item_number\";s:13:\"7790040613607\";s:16:\"attribute_values\";N;s:18:\"attribute_dtvalues\";N;s:11:\"description\";s:0:\"\";s:12:\"serialnumber\";s:0:\"\";s:21:\"allow_alt_description\";s:1:\"0\";s:13:\"is_serialized\";s:1:\"0\";s:8:\"quantity\";i:1;s:8:\"discount\";s:1:\"0\";s:13:\"discount_type\";s:1:\"0\";s:8:\"in_stock\";i:0;s:5:\"price\";s:6:\"450.00\";s:10:\"cost_price\";s:6:\"295.00\";s:5:\"total\";s:6:\"450.00\";s:16:\"discounted_total\";s:6:\"450.00\";s:12:\"print_option\";i:0;s:10:\"stock_type\";s:1:\"0\";s:9:\"item_type\";s:1:\"0\";s:8:\"hsn_code\";s:0:\"\";s:15:\"tax_category_id\";s:1:\"0\";}}sales_customer|i:-1;sales_mode|s:4:\"sale\";sales_payments|a:0:{}cash_mode|i:0;cash_rounding|i:0;'
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0049269199371338

SELECT RELEASE_LOCK('8765c07efc0e7686e0235964c83390e7') AS ci_session_lock 
 Execution Time:0.00019693374633789

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '2aoveg2vvvp5su4b56vbtpehvjaedmhn'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0017318725585938

SELECT GET_LOCK('3a9f9edb3574e8c1b7b5a33ea25a7f63', 300) AS ci_session_lock 
 Execution Time:0.00030398368835449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'l4n1l7ba2rnksskkbe8vis7sb0uc7nu3'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0018730163574219

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0001981258392334

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018501281738281

SHOW TABLES FROM `ospos` 
 Execution Time:0.00072693824768066

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0001981258392334

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00029921531677246

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015878677368164

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0001521110534668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016212463378906

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00016283988952637

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '42' 
 Execution Time:0.00013589859008789

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014209747314453

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0012979507446289

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0009160041809082

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00015807151794434

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '42' 
 Execution Time:0.00016283988952637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015807151794434

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00017714500427246

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00020790100097656

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'l4n1l7ba2rnksskkbe8vis7sb0uc7nu3'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0021970272064209

SELECT GET_LOCK('3a9f9edb3574e8c1b7b5a33ea25a7f63', 300) AS ci_session_lock 
 Execution Time:0.00022697448730469

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'l4n1l7ba2rnksskkbe8vis7sb0uc7nu3'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0022158622741699

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023484230041504

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066399574279785

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013995170593262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00019001960754395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00023412704467773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015687942504883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0001518726348877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015807151794434

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '3'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.0001680850982666

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00015115737915039

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00016379356384277

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014090538024902

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0011899471282959

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00090909004211426

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00018596649169922

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '42' 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00030779838562012

INSERT INTO `ospos_sales` (`sale_time`, `customer_id`, `employee_id`, `comment`, `sale_status`, `invoice_number`, `quote_number`, `work_order_number`, `dinner_table_id`, `sale_type`) VALUES ('2021-02-23 17:04:49', NULL, '3', '', 0, NULL, NULL, NULL, NULL, 0) 
 Execution Time:0.0005791187286377

INSERT INTO `ospos_sales_payments` (`sale_id`, `payment_type`, `payment_amount`, `cash_refund`, `employee_id`) VALUES (236, 'Tarjeta de Débito', 3200, 0, '3') 
 Execution Time:0.00032186508178711

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00021004676818848

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00017094612121582

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0016040802001953

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.00097894668579102

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '202'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.00075101852416992

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (236, '202', 1, '', '', 1, '0', '0', '2.00', '2750.00', '1', 0) 
 Execution Time:0.00036096572875977

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '202'
AND `location_id` = '1' 
 Execution Time:0.00039291381835938

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '202'
AND `location_id` = '1' 
 Execution Time:0.00014805793762207

UPDATE `ospos_item_quantities` SET `quantity` = -2, `item_id` = '202', `location_id` = '1'
WHERE `item_id` = '202'
AND `location_id` = '1' 
 Execution Time:0.00039315223693848

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2021-02-23 17:04:49', '202', '3', '1', 'POS 236', -1) 
 Execution Time:0.00030899047851562

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			  SELECT '202', definition_id, attribute_id, 236
			  FROM ospos_attribute_links
			  WHERE item_id = '202' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.00043416023254395

SELECT `ospos_items`.*, GROUP_CONCAT(attribute_value SEPARATOR '|') AS attribute_values, GROUP_CONCAT(attribute_decimal SEPARATOR '|') AS attribute_dvalues, GROUP_CONCAT(attribute_date SEPARATOR '|') AS attribute_dtvalues
FROM `ospos_items`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_items`.`item_id`
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_links`.`attribute_id` = `ospos_attribute_values`.`attribute_id`
WHERE `ospos_items`.`item_id` = '42'
GROUP BY `ospos_items`.`item_id` 
 Execution Time:0.00057005882263184

INSERT INTO `ospos_sales_items` (`sale_id`, `item_id`, `line`, `description`, `serialnumber`, `quantity_purchased`, `discount`, `discount_type`, `item_cost_price`, `item_unit_price`, `item_location`, `print_option`) VALUES (236, '42', 2, '', '', 1, '0', '0', '295.00', '450.00', '1', 0) 
 Execution Time:0.00099301338195801

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '42'
AND `location_id` = '1' 
 Execution Time:0.0053308010101318

SHOW COLUMNS FROM `ospos_item_quantities` 
 Execution Time:0.0010859966278076

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '42'
AND `location_id` = '1' 
 Execution Time:0.00039100646972656

INSERT INTO `ospos_item_quantities` (`quantity`, `item_id`, `location_id`) VALUES (-1, '42', '1') 
 Execution Time:0.00029587745666504

INSERT INTO `ospos_inventory` (`trans_date`, `trans_items`, `trans_user`, `trans_location`, `trans_comment`, `trans_inventory`) VALUES ('2021-02-23 17:04:49', '42', '3', '1', 'POS 236', -1) 
 Execution Time:0.00037693977355957

INSERT INTO ospos_attribute_links (item_id, definition_id, attribute_id, sale_id)
			  SELECT '42', definition_id, attribute_id, 236
			  FROM ospos_attribute_links
			  WHERE item_id = '42' AND sale_id IS NULL AND receiving_id IS NULL 
 Execution Time:0.00040793418884277

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '3'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00026607513427734

SELECT GET_LOCK('90c00ae46be96a3124732da78e978ec0', 300) AS ci_session_lock 
 Execution Time:0.00023293495178223

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6mr2146f4l0947aiqiv7eeej60cr3sjt'
AND `ip_address` = '23.231.76.98' 
 Execution Time:0.0020120143890381

SHOW TABLES FROM `ospos` 
 Execution Time:0.00062394142150879

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00027298927307129

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003199577331543

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002598762512207

SELECT GET_LOCK('456ca9b57a76fdbf62a2c7009760c3a6', 300) AS ci_session_lock 
 Execution Time:0.00025510787963867

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '827ivq23oqj3ul32j0s3c066k0d30ri1'
AND `ip_address` = '183.89.179.121' 
 Execution Time:0.0023419857025146

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070691108703613

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029397010803223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022387504577637

SELECT GET_LOCK('103ca2f2ea06face695cc037fe0c523e', 300) AS ci_session_lock 
 Execution Time:0.00031805038452148

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'jimnbopua5a9acd22agpc8ves9to07bi'
AND `ip_address` = '110.50.85.210' 
 Execution Time:0.0024209022521973

SHOW TABLES FROM `ospos` 
 Execution Time:0.00075197219848633

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003659725189209

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00025010108947754

SELECT GET_LOCK('8b45506c839b77bb91264773f4b475d3', 300) AS ci_session_lock 
 Execution Time:0.00035190582275391

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '74t8mp9mffanjkvuib5r9n5cdfi76sn9'
AND `ip_address` = '139.162.113.204' 
 Execution Time:0.0025720596313477

SHOW TABLES FROM `ospos` 
 Execution Time:0.00076103210449219

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00039291381835938

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00026583671569824

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '5ufi20jdg6njt198jvtce7d7rl7oefs3'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0020949840545654

SELECT GET_LOCK('bb314e3482b794e4f827cde1707223d4', 300) AS ci_session_lock 
 Execution Time:0.00024008750915527

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ufi20jdg6njt198jvtce7d7rl7oefs3'
AND `ip_address` = '191.113.170.199' 
 Execution Time:0.0025689601898193

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00032901763916016

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00023698806762695

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00027108192443848

SHOW TABLES FROM `ospos` 
 Execution Time:0.00092601776123047

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021910667419434

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030398368835449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00030398368835449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00025296211242676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00042581558227539

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.000244140625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00022196769714355

SELECT GET_LOCK('34b888c786951248fa2728775104e485', 300) AS ci_session_lock 
 Execution Time:0.00027585029602051

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tmn6b16h5f3ct9iku3njk9nqf59qdlr1'
AND `ip_address` = '74.120.14.56' 
 Execution Time:0.0022709369659424

SHOW TABLES FROM `ospos` 
 Execution Time:0.00065207481384277

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029802322387695

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022602081298828

SELECT GET_LOCK('2559f88f826e88d58b948001e702f62a', 300) AS ci_session_lock 
 Execution Time:0.00028705596923828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iemkukg2rph00drkhir09ljdl7ees462'
AND `ip_address` = '74.120.14.56' 
 Execution Time:0.0021030902862549

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070905685424805

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00037813186645508

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00032901763916016

SELECT GET_LOCK('85965c2a2614d254d35657cdf922aa61', 300) AS ci_session_lock 
 Execution Time:0.00023508071899414

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2e6mgfl80vh1khqq9qd36frqk1h7t3qh'
AND `ip_address` = '23.231.76.98' 
 Execution Time:0.0023651123046875

SHOW TABLES FROM `ospos` 
 Execution Time:0.0006721019744873

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00043296813964844

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00024795532226562

SELECT GET_LOCK('ebd99465d04dde372d8ec52379f645d5', 300) AS ci_session_lock 
 Execution Time:0.00024604797363281

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'iu0d11v1skh8rp7m7tn6efimds43v9jv'
AND `ip_address` = '186.107.111.254' 
 Execution Time:0.0024049282073975

SHOW TABLES FROM `ospos` 
 Execution Time:0.00076889991760254

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016617774963379

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00027012825012207

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00019097328186035

SELECT GET_LOCK('3cbf5ef93f5734f5650d03c4f834daee', 300) AS ci_session_lock 
 Execution Time:0.00024008750915527

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'atf19jb7n1jk0d57ggepuarqn5p3aq7l'
AND `ip_address` = '186.107.111.254' 
 Execution Time:0.0025420188903809

SHOW TABLES FROM `ospos` 
 Execution Time:0.00077915191650391

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031495094299316

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00034594535827637

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'atf19jb7n1jk0d57ggepuarqn5p3aq7l'
AND `ip_address` = '186.107.111.254' 
 Execution Time:0.0025429725646973

SELECT GET_LOCK('3cbf5ef93f5734f5650d03c4f834daee', 300) AS ci_session_lock 
 Execution Time:0.00022602081298828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'atf19jb7n1jk0d57ggepuarqn5p3aq7l'
AND `ip_address` = '186.107.111.254' 
 Execution Time:0.0021688938140869

SHOW TABLES FROM `ospos` 
 Execution Time:0.00080204010009766

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029206275939941

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022697448730469

SELECT *
FROM `ospos_employees`
WHERE `username` = 'admin'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:0.00015401840209961

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022792816162109

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'atf19jb7n1jk0d57ggepuarqn5p3aq7l'
AND `ip_address` = '186.107.111.254' 
 Execution Time:0.0019450187683105

SELECT GET_LOCK('3cbf5ef93f5734f5650d03c4f834daee', 300) AS ci_session_lock 
 Execution Time:0.00023508071899414

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'atf19jb7n1jk0d57ggepuarqn5p3aq7l'
AND `ip_address` = '186.107.111.254' 
 Execution Time:0.0021529197692871

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00023293495178223

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023078918457031

SHOW TABLES FROM `ospos` 
 Execution Time:0.0007319450378418

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020408630371094

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031709671020508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00030303001403809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017189979553223

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'atf19jb7n1jk0d57ggepuarqn5p3aq7l'
AND `ip_address` = '186.107.111.254' 
 Execution Time:0.002202033996582

SELECT GET_LOCK('3cbf5ef93f5734f5650d03c4f834daee', 300) AS ci_session_lock 
 Execution Time:0.00037813186645508

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'atf19jb7n1jk0d57ggepuarqn5p3aq7l'
AND `ip_address` = '186.107.111.254' 
 Execution Time:0.0022320747375488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00025391578674316

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '3' 
 Execution Time:0.0001981258392334

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '3'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00025415420532227

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066900253295898

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014615058898926

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026798248291016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00032520294189453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00020194053649902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00032210350036621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '3' 
 Execution Time:0.00019097328186035

SELECT GET_LOCK('d8f27b58343c63f52855d16f1f628c90', 300) AS ci_session_lock 
 Execution Time:0.00030398368835449

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'f7sc6fsqctoptg5ffhbu2n7jknc0m0s6'
AND `ip_address` = '134.209.76.11' 
 Execution Time:0.0022358894348145

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070786476135254

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030994415283203

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00024890899658203

SELECT GET_LOCK('9ad64eae48f5e7f2a2b13bb4f6937138', 300) AS ci_session_lock 
 Execution Time:0.00021600723266602

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '3sj10svd5v2ihfhrgdtopo6t7ul0scn7'
AND `ip_address` = '193.118.53.210' 
 Execution Time:0.0023460388183594

SHOW TABLES FROM `ospos` 
 Execution Time:0.00064396858215332

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013208389282227

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0002739429473877

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002291202545166

SELECT GET_LOCK('13b3f24a14a1e3455464a5e9c98bc750', 300) AS ci_session_lock 
 Execution Time:0.00023794174194336

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'g0akqmcihmep1aph34h0qjkf80saapiv'
AND `ip_address` = '213.6.151.210' 
 Execution Time:0.0022749900817871

SHOW TABLES FROM `ospos` 
 Execution Time:0.00078678131103516

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016403198242188

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031900405883789

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022792816162109

SELECT GET_LOCK('7e7beced596d71d95d13063dca450e53', 300) AS ci_session_lock 
 Execution Time:0.00022101402282715

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bhuuusn7blrg2brjo5is0vsmro0n77nl'
AND `ip_address` = '185.142.236.40' 
 Execution Time:0.0026099681854248

SHOW TABLES FROM `ospos` 
 Execution Time:0.00064802169799805

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013089179992676

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026416778564453

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022482872009277

SELECT GET_LOCK('c83958b3fad58d5c673f738ab0584ec8', 300) AS ci_session_lock 
 Execution Time:0.00034499168395996

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'tbn1b5cu95pknlb4p1gpuhm6u9s2149t'
AND `ip_address` = '35.187.190.226' 
 Execution Time:0.0024950504302979

SHOW TABLES FROM `ospos` 
 Execution Time:0.00080513954162598

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034499168395996

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00025320053100586

SELECT GET_LOCK('f44b83e1ca8f6b50dcc40d5dfc691f11', 300) AS ci_session_lock 
 Execution Time:0.00023484230041504

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'isqbnnbhs20gvov8uoo65jk8mdl3krit'
AND `ip_address` = '2.57.122.97' 
 Execution Time:0.0026500225067139

SHOW TABLES FROM `ospos` 
 Execution Time:0.00089287757873535

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001838207244873

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003969669342041

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00028300285339355

SELECT GET_LOCK('eeb99ad332dfef406d331528f7b6aa4c', 300) AS ci_session_lock 
 Execution Time:0.00026893615722656

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '7saaeee8ls7od78b7976ohr8u48spbkd'
AND `ip_address` = '200.72.158.152' 
 Execution Time:0.0023930072784424

SHOW TABLES FROM `ospos` 
 Execution Time:0.0010001659393311

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015783309936523

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030899047851562

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002598762512207

SELECT GET_LOCK('ffbc405b478fe7b79ba5cec139073fc8', 300) AS ci_session_lock 
 Execution Time:0.00023388862609863

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'nl3qhln6m96phcug9ergb6eaav984u6g'
AND `ip_address` = '52.34.165.141' 
 Execution Time:0.0024580955505371

SHOW TABLES FROM `ospos` 
 Execution Time:0.00065112113952637

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014519691467285

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029110908508301

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022196769714355

SELECT GET_LOCK('200cbf9a99dfec7bf2ba3c95ae1b30a0', 300) AS ci_session_lock 
 Execution Time:0.00021505355834961

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd731eugfksono9tefbcj74clokqrc9sh'
AND `ip_address` = '54.186.33.22' 
 Execution Time:0.0048320293426514

SHOW TABLES FROM `ospos` 
 Execution Time:0.00058197975158691

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00011014938354492

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00025701522827148

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002140998840332

SELECT GET_LOCK('42d00c6963c5c7b5e084899692b8030c', 300) AS ci_session_lock 
 Execution Time:0.00034713745117188

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2okb1i21gpf18ao4k0inm7r7o6utsaod'
AND `ip_address` = '71.6.232.4' 
 Execution Time:0.0026900768280029

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070810317993164

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001518726348877

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00032210350036621

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00026607513427734

SELECT GET_LOCK('7b6de2d002e76ed36f79b05c24b8e8a1', 300) AS ci_session_lock 
 Execution Time:0.00029110908508301

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'qthgp3fnslv9s7ok340b3gv7i5bg1vdj'
AND `ip_address` = '119.42.106.141' 
 Execution Time:0.0033118724822998

SHOW TABLES FROM `ospos` 
 Execution Time:0.0010831356048584

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0003058910369873

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00041699409484863

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023603439331055

