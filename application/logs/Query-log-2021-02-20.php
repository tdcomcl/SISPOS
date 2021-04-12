SELECT GET_LOCK('abbea62e5f0b6dc1916523ea21798238', 300) AS ci_session_lock 
 Execution Time:0.00025391578674316

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'u961vtpc997lk9jvj6rg8m7vd9bpbfu0'
AND `ip_address` = '51.89.228.207' 
 Execution Time:0.0021340847015381

SHOW TABLES FROM `ospos` 
 Execution Time:0.00060105323791504

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014615058898926

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029706954956055

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00024795532226562

SELECT GET_LOCK('fe168a8bb2223a659b524e2bc6f5f080', 300) AS ci_session_lock 
 Execution Time:0.00037598609924316

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5ntim54rhbbqr6jhvi1vk7vqldnivmfn'
AND `ip_address` = '104.152.52.22' 
 Execution Time:0.0024759769439697

SHOW TABLES FROM `ospos` 
 Execution Time:0.00083684921264648

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00035715103149414

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00033092498779297

SELECT GET_LOCK('8a708a0206ebbc46384711541f0abe4e', 300) AS ci_session_lock 
 Execution Time:0.00027203559875488

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '0ktd3ke631n0m3ivg3c7g04lpgig3jlf'
AND `ip_address` = '74.120.14.38' 
 Execution Time:0.0019369125366211

SHOW TABLES FROM `ospos` 
 Execution Time:0.00083017349243164

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018811225891113

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030398368835449

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0003211498260498

SELECT GET_LOCK('120fa722ef899116a88f4f1652dd186e', 300) AS ci_session_lock 
 Execution Time:0.00024819374084473

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'oka2oh2jrbec4pnec7b2m2hsjic72rce'
AND `ip_address` = '74.120.14.38' 
 Execution Time:0.0020871162414551

SHOW TABLES FROM `ospos` 
 Execution Time:0.00064206123352051

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029611587524414

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00024914741516113

SELECT GET_LOCK('10fc96fbc4df4881e839b6f3f33f0590', 300) AS ci_session_lock 
 Execution Time:0.00035881996154785

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'trl14rkn4ac8m6r1u52900g15mko12eb'
AND `ip_address` = '34.86.35.132' 
 Execution Time:0.0019199848175049

SHOW TABLES FROM `ospos` 
 Execution Time:0.00083804130554199

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034999847412109

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00037002563476562

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00029206275939941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0021491050720215

SHOW TABLES FROM `ospos` 
 Execution Time:0.0006101131439209

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029397010803223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00026822090148926

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0016241073608398

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00021100044250488

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0018141269683838

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021886825561523

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00025105476379395

SHOW TABLES FROM `ospos` 
 Execution Time:0.00062799453735352

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029683113098145

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002751350402832

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017714500427246

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017213821411133

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00164794921875

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00021100044250488

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0023770332336426

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023007392883301

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'office%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00018596649169922

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'office!_%' ESCAPE '!' 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017118453979492

SHOW TABLES FROM `ospos` 
 Execution Time:0.00062799453735352

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013995170593262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023102760314941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026607513427734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019216537475586

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020384788513184

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0023691654205322

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00035309791564941

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017189979553223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023484230041504

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'taxes%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00094890594482422

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'taxes!_%' ESCAPE '!' 
 Execution Time:0.00038409233093262

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017404556274414

SHOW TABLES FROM `ospos` 
 Execution Time:0.0008080005645752

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016689300537109

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023889541625977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031495094299316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020313262939453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021505355834961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026202201843262

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00018119812011719

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033712387084961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018405914306641

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0018391609191895

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00022292137145996

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017440319061279

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023508071899414

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'taxes%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'taxes!_%' ESCAPE '!' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00021910667419434

SHOW TABLES FROM `ospos` 
 Execution Time:0.00071501731872559

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014090538024902

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023388862609863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031685829162598

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022006034851074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018787384033203

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018715858459473

SELECT `tax_rate_id`, `tax_code`, `rate_tax_code_id`, `tax_code_name`, `rate_jurisdiction_id`, `jurisdiction_name`, `rate_tax_category_id`, `tax_category`, `tax_rate`, `tax_rounding_code`
FROM `ospos_tax_rates`
LEFT JOIN `ospos_tax_codes` ON `rate_tax_code_id` = `tax_code_id`
LEFT JOIN `ospos_tax_categories` ON `rate_tax_category_id` = `tax_category_id`
LEFT JOIN `ospos_tax_jurisdictions` ON `rate_jurisdiction_id` = `jurisdiction_id`
 LIMIT 25 
 Execution Time:0.00078701972961426

SELECT COUNT(tax_rate_id) as count
FROM `ospos_tax_rates`
LEFT JOIN `ospos_tax_codes` ON `rate_tax_code_id` = `tax_code_id`
LEFT JOIN `ospos_tax_categories` ON `rate_tax_category_id` = `tax_category_id`
LEFT JOIN `ospos_tax_jurisdictions` ON `rate_jurisdiction_id` = `jurisdiction_id` 
 Execution Time:0.00076508522033691

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0018138885498047

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.0002129077911377

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0020158290863037

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029492378234863

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'attributes%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0004730224609375

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'attributes!_%' ESCAPE '!' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017189979553223

SHOW TABLES FROM `ospos` 
 Execution Time:0.00058698654174805

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030398368835449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002598762512207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002281665802002

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020408630371094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001828670501709

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025200843811035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017786026000977

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017008781433105

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00023293495178223

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0019450187683105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022721290588379

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'attributes%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'attributes!_%' ESCAPE '!' 
 Execution Time:0.00014781951904297

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018000602722168

SHOW TABLES FROM `ospos` 
 Execution Time:0.00068283081054688

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017714500427246

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0002741813659668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020909309387207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022506713867188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017189979553223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026702880859375

SELECT `parent_definition`.`definition_name` AS `definition_group`, `definition`.*
FROM `ospos_attribute_definitions` AS `definition`
LEFT JOIN `ospos_attribute_definitions` AS `parent_definition` ON `parent_definition`.`definition_id` = `definition`.`definition_fk`
WHERE   (
`definition`.`definition_name` LIKE '%%' ESCAPE '!'
OR  `definition`.`definition_type` LIKE '%%' ESCAPE '!'
 )
AND `definition`.`deleted` = 0
 LIMIT 25 
 Execution Time:0.00026106834411621

SELECT `parent_definition`.`definition_name` AS `definition_group`, `definition`.*
FROM `ospos_attribute_definitions` AS `definition`
LEFT JOIN `ospos_attribute_definitions` AS `parent_definition` ON `parent_definition`.`definition_id` = `definition`.`definition_fk`
WHERE   (
`definition`.`definition_name` LIKE '%%' ESCAPE '!'
OR  `definition`.`definition_type` LIKE '%%' ESCAPE '!'
 )
AND `definition`.`deleted` = 0
ORDER BY `definition`.`definition_name` ASC 
 Execution Time:0.00016093254089355

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0016021728515625

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00025701522827148

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0019268989562988

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021886825561523

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00014114379882812

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017118453979492

SHOW TABLES FROM `ospos` 
 Execution Time:0.00082802772521973

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026392936706543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026297569274902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022506713867188

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.00014519691467285

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.00014519691467285

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00014686584472656

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.0001530647277832

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:0.00016212463378906

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00016117095947266

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025391578674316

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.002047061920166

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00026297569274902

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0028741359710693

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021791458129883

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017213821411133

SHOW TABLES FROM `ospos` 
 Execution Time:0.00062012672424316

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013995170593262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023293495178223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023007392883301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017786026000977

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0016570091247559

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00021100044250488

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017180442810059

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023317337036133

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018310546875

SHOW TABLES FROM `ospos` 
 Execution Time:0.00062203407287598

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016093254089355

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0002739429473877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022697448730469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017714500427246

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024604797363281

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00018215179443359

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00027894973754883

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021100044250488

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00013589859008789

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001680850982666

SHOW TABLES FROM `ospos` 
 Execution Time:0.00059199333190918

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023102760314941

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023889541625977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020503997802734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019717216491699

UPDATE `ospos_modules` SET `sort` = 999
WHERE `module_id` = 'office' 
 Execution Time:0.0018689632415771

UPDATE `ospos_attribute_definitions` SET `deleted` = 1
WHERE `definition_id` = -1 
 Execution Time:0.00094223022460938

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'theme' 
 Execution Time:0.00041890144348145

UPDATE `ospos_app_config` SET `key` = 'theme', `value` = 'paper'
WHERE `key` = 'theme' 
 Execution Time:0.00034904479980469

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_sales_discount_type' 
 Execution Time:0.00027012825012207

UPDATE `ospos_app_config` SET `key` = 'default_sales_discount_type', `value` = 0
WHERE `key` = 'default_sales_discount_type' 
 Execution Time:0.00025701522827148

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_sales_discount' 
 Execution Time:0.00025582313537598

UPDATE `ospos_app_config` SET `key` = 'default_sales_discount', `value` = '0'
WHERE `key` = 'default_sales_discount' 
 Execution Time:0.00025105476379395

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_receivings_discount_type' 
 Execution Time:0.00025200843811035

UPDATE `ospos_app_config` SET `key` = 'default_receivings_discount_type', `value` = 0
WHERE `key` = 'default_receivings_discount_type' 
 Execution Time:0.00026202201843262

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_receivings_discount' 
 Execution Time:0.00027298927307129

UPDATE `ospos_app_config` SET `key` = 'default_receivings_discount', `value` = '0'
WHERE `key` = 'default_receivings_discount' 
 Execution Time:0.00033020973205566

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'enforce_privacy' 
 Execution Time:0.00025200843811035

UPDATE `ospos_app_config` SET `key` = 'enforce_privacy', `value` = 'enforce_privacy'
WHERE `key` = 'enforce_privacy' 
 Execution Time:0.00027990341186523

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receiving_calculate_average_price' 
 Execution Time:0.00026106834411621

UPDATE `ospos_app_config` SET `key` = 'receiving_calculate_average_price', `value` = 0
WHERE `key` = 'receiving_calculate_average_price' 
 Execution Time:0.00026607513427734

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'lines_per_page' 
 Execution Time:0.00025606155395508

UPDATE `ospos_app_config` SET `key` = 'lines_per_page', `value` = '25'
WHERE `key` = 'lines_per_page' 
 Execution Time:0.000244140625

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'notify_horizontal_position' 
 Execution Time:0.00025486946105957

UPDATE `ospos_app_config` SET `key` = 'notify_horizontal_position', `value` = 'center'
WHERE `key` = 'notify_horizontal_position' 
 Execution Time:0.00024318695068359

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'notify_vertical_position' 
 Execution Time:0.00025296211242676

UPDATE `ospos_app_config` SET `key` = 'notify_vertical_position', `value` = 'bottom'
WHERE `key` = 'notify_vertical_position' 
 Execution Time:0.00027894973754883

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_width' 
 Execution Time:0.0002751350402832

UPDATE `ospos_app_config` SET `key` = 'image_max_width', `value` = '640'
WHERE `key` = 'image_max_width' 
 Execution Time:0.000244140625

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_height' 
 Execution Time:0.00048708915710449

UPDATE `ospos_app_config` SET `key` = 'image_max_height', `value` = '480'
WHERE `key` = 'image_max_height' 
 Execution Time:0.00026488304138184

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_size' 
 Execution Time:0.00025296211242676

UPDATE `ospos_app_config` SET `key` = 'image_max_size', `value` = '128'
WHERE `key` = 'image_max_size' 
 Execution Time:0.00023984909057617

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_allowed_types' 
 Execution Time:0.00025606155395508

UPDATE `ospos_app_config` SET `key` = 'image_allowed_types', `value` = 'jpg|gif|png'
WHERE `key` = 'image_allowed_types' 
 Execution Time:0.00024700164794922

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_enable' 
 Execution Time:0.00025510787963867

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_enable', `value` = 0
WHERE `key` = 'gcaptcha_enable' 
 Execution Time:0.00026512145996094

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_secret_key' 
 Execution Time:0.00028109550476074

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_secret_key', `value` = '6LfHckoaAAAAABG92_lqjVbFFInGZYwBcwlwhKpp'
WHERE `key` = 'gcaptcha_secret_key' 
 Execution Time:0.00023984909057617

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_site_key' 
 Execution Time:0.00028395652770996

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_site_key', `value` = '6LfHckoaAAAAAFCtiUYLvfVs33gEfLtpwuHeOfmP'
WHERE `key` = 'gcaptcha_site_key' 
 Execution Time:0.00024104118347168

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_first_column' 
 Execution Time:0.00028300285339355

UPDATE `ospos_app_config` SET `key` = 'suggestions_first_column', `value` = 'name'
WHERE `key` = 'suggestions_first_column' 
 Execution Time:0.00023984909057617

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_second_column' 
 Execution Time:0.00024986267089844

UPDATE `ospos_app_config` SET `key` = 'suggestions_second_column', `value` = ''
WHERE `key` = 'suggestions_second_column' 
 Execution Time:0.00023984909057617

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_third_column' 
 Execution Time:0.00025105476379395

UPDATE `ospos_app_config` SET `key` = 'suggestions_third_column', `value` = ''
WHERE `key` = 'suggestions_third_column' 
 Execution Time:0.00023889541625977

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'giftcard_number' 
 Execution Time:0.00031900405883789

UPDATE `ospos_app_config` SET `key` = 'giftcard_number', `value` = 'series'
WHERE `key` = 'giftcard_number' 
 Execution Time:0.00027108192443848

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'derive_sale_quantity' 
 Execution Time:0.00024986267089844

UPDATE `ospos_app_config` SET `key` = 'derive_sale_quantity', `value` = 0
WHERE `key` = 'derive_sale_quantity' 
 Execution Time:0.0002439022064209

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'multi_pack_enabled' 
 Execution Time:0.00025701522827148

UPDATE `ospos_app_config` SET `key` = 'multi_pack_enabled', `value` = 0
WHERE `key` = 'multi_pack_enabled' 
 Execution Time:0.00024700164794922

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'include_hsn' 
 Execution Time:0.00025582313537598

UPDATE `ospos_app_config` SET `key` = 'include_hsn', `value` = 0
WHERE `key` = 'include_hsn' 
 Execution Time:0.00024199485778809

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'category_dropdown' 
 Execution Time:0.00025486946105957

UPDATE `ospos_app_config` SET `key` = 'category_dropdown', `value` = 0
WHERE `key` = 'category_dropdown' 
 Execution Time:0.00026297569274902

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00011992454528809

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00017905235290527

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00010204315185547

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001528263092041

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00010085105895996

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00013995170593262

SHOW TABLES FROM `ospos` 
 Execution Time:0.00052690505981445

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00045990943908691

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002439022064209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00015115737915039

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00012397766113281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.00011181831359863

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.00011301040649414

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.00010204315185547

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.00010895729064941

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:0.00011706352233887

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00037407875061035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017189979553223

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0026471614837646

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.0002739429473877

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0031118392944336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028014183044434

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'attributes%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'attributes!_%' ESCAPE '!' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00028204917907715

SHOW TABLES FROM `ospos` 
 Execution Time:0.0010120868682861

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00032591819763184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025200843811035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019288063049316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018596649169922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019621849060059

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021100044250488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019288063049316

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0025389194488525

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.0003352165222168

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0028030872344971

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00032496452331543

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'attributes%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'attributes!_%' ESCAPE '!' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00022101402282715

SHOW TABLES FROM `ospos` 
 Execution Time:0.00098109245300293

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00032806396484375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033998489379883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023198127746582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022792816162109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022602081298828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024509429931641

SELECT `parent_definition`.`definition_name` AS `definition_group`, `definition`.*
FROM `ospos_attribute_definitions` AS `definition`
LEFT JOIN `ospos_attribute_definitions` AS `parent_definition` ON `parent_definition`.`definition_id` = `definition`.`definition_fk`
WHERE   (
`definition`.`definition_name` LIKE '%%' ESCAPE '!'
OR  `definition`.`definition_type` LIKE '%%' ESCAPE '!'
 )
AND `definition`.`deleted` = 0
 LIMIT 25 
 Execution Time:0.0009160041809082

SELECT `parent_definition`.`definition_name` AS `definition_group`, `definition`.*
FROM `ospos_attribute_definitions` AS `definition`
LEFT JOIN `ospos_attribute_definitions` AS `parent_definition` ON `parent_definition`.`definition_id` = `definition`.`definition_fk`
WHERE   (
`definition`.`definition_name` LIKE '%%' ESCAPE '!'
OR  `definition`.`definition_type` LIKE '%%' ESCAPE '!'
 )
AND `definition`.`deleted` = 0
ORDER BY `definition`.`definition_name` ASC 
 Execution Time:0.00086712837219238

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017728805541992

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00021004676818848

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0018789768218994

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022006034851074

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00022506713867188

SHOW TABLES FROM `ospos` 
 Execution Time:0.00067806243896484

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014090538024902

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00024795532226562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00041294097900391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018811225891113

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021505355834961

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.0002288818359375

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025701522827148

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017201900482178

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.0042600631713867

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.001863956451416

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0034708976745605

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00047492980957031

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017404556274414

SHOW TABLES FROM `ospos` 
 Execution Time:0.00063514709472656

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015807151794434

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026082992553711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027585029602051

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018215179443359

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001981258392334

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021791458129883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024104118347168

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0011968612670898

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.044883012771606

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0018711090087891

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0013129711151123

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00013089179992676

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00012397766113281

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00015091896057129

SHOW TABLES FROM `ospos` 
 Execution Time:0.00085592269897461

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00036096572875977

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033307075500488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024509429931641

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017869472503662

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00020813941955566

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00014185905456543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023102760314941

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00016903877258301

SHOW TABLES FROM `ospos` 
 Execution Time:0.00055980682373047

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003669261932373

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002601146697998

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017619132995605

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017881393432617

UPDATE `ospos_modules` SET `sort` = 999
WHERE `module_id` = 'office' 
 Execution Time:0.0021688938140869

UPDATE `ospos_attribute_definitions` SET `deleted` = 1
WHERE `definition_id` = -1 
 Execution Time:0.00098299980163574

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'theme' 
 Execution Time:0.00047898292541504

UPDATE `ospos_app_config` SET `key` = 'theme', `value` = 'superhero'
WHERE `key` = 'theme' 
 Execution Time:0.0003669261932373

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_sales_discount_type' 
 Execution Time:0.00029993057250977

UPDATE `ospos_app_config` SET `key` = 'default_sales_discount_type', `value` = 0
WHERE `key` = 'default_sales_discount_type' 
 Execution Time:0.00028085708618164

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_sales_discount' 
 Execution Time:0.00026202201843262

UPDATE `ospos_app_config` SET `key` = 'default_sales_discount', `value` = '0'
WHERE `key` = 'default_sales_discount' 
 Execution Time:0.00025701522827148

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_receivings_discount_type' 
 Execution Time:0.00026106834411621

UPDATE `ospos_app_config` SET `key` = 'default_receivings_discount_type', `value` = 0
WHERE `key` = 'default_receivings_discount_type' 
 Execution Time:0.00029611587524414

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_receivings_discount' 
 Execution Time:0.0002601146697998

UPDATE `ospos_app_config` SET `key` = 'default_receivings_discount', `value` = '0'
WHERE `key` = 'default_receivings_discount' 
 Execution Time:0.00028610229492188

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'enforce_privacy' 
 Execution Time:0.00030994415283203

UPDATE `ospos_app_config` SET `key` = 'enforce_privacy', `value` = 'enforce_privacy'
WHERE `key` = 'enforce_privacy' 
 Execution Time:0.00026297569274902

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receiving_calculate_average_price' 
 Execution Time:0.00028014183044434

UPDATE `ospos_app_config` SET `key` = 'receiving_calculate_average_price', `value` = 0
WHERE `key` = 'receiving_calculate_average_price' 
 Execution Time:0.00025510787963867

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'lines_per_page' 
 Execution Time:0.00026202201843262

UPDATE `ospos_app_config` SET `key` = 'lines_per_page', `value` = '25'
WHERE `key` = 'lines_per_page' 
 Execution Time:0.00026917457580566

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'notify_horizontal_position' 
 Execution Time:0.00026202201843262

UPDATE `ospos_app_config` SET `key` = 'notify_horizontal_position', `value` = 'center'
WHERE `key` = 'notify_horizontal_position' 
 Execution Time:0.00024890899658203

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'notify_vertical_position' 
 Execution Time:0.0002598762512207

UPDATE `ospos_app_config` SET `key` = 'notify_vertical_position', `value` = 'bottom'
WHERE `key` = 'notify_vertical_position' 
 Execution Time:0.00024795532226562

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_width' 
 Execution Time:0.00029706954956055

UPDATE `ospos_app_config` SET `key` = 'image_max_width', `value` = '640'
WHERE `key` = 'image_max_width' 
 Execution Time:0.00030207633972168

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_height' 
 Execution Time:0.0002591609954834

UPDATE `ospos_app_config` SET `key` = 'image_max_height', `value` = '480'
WHERE `key` = 'image_max_height' 
 Execution Time:0.00025105476379395

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_size' 
 Execution Time:0.00025796890258789

UPDATE `ospos_app_config` SET `key` = 'image_max_size', `value` = '128'
WHERE `key` = 'image_max_size' 
 Execution Time:0.00024700164794922

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_allowed_types' 
 Execution Time:0.0002601146697998

UPDATE `ospos_app_config` SET `key` = 'image_allowed_types', `value` = 'jpg|gif|png'
WHERE `key` = 'image_allowed_types' 
 Execution Time:0.00024604797363281

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_enable' 
 Execution Time:0.0002899169921875

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_enable', `value` = 0
WHERE `key` = 'gcaptcha_enable' 
 Execution Time:0.00024819374084473

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_secret_key' 
 Execution Time:0.00025582313537598

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_secret_key', `value` = '6LfHckoaAAAAABG92_lqjVbFFInGZYwBcwlwhKpp'
WHERE `key` = 'gcaptcha_secret_key' 
 Execution Time:0.00027179718017578

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_site_key' 
 Execution Time:0.0003359317779541

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_site_key', `value` = '6LfHckoaAAAAAFCtiUYLvfVs33gEfLtpwuHeOfmP'
WHERE `key` = 'gcaptcha_site_key' 
 Execution Time:0.00024700164794922

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_first_column' 
 Execution Time:0.00025606155395508

UPDATE `ospos_app_config` SET `key` = 'suggestions_first_column', `value` = 'name'
WHERE `key` = 'suggestions_first_column' 
 Execution Time:0.00024509429931641

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_second_column' 
 Execution Time:0.00025486946105957

UPDATE `ospos_app_config` SET `key` = 'suggestions_second_column', `value` = ''
WHERE `key` = 'suggestions_second_column' 
 Execution Time:0.0002439022064209

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_third_column' 
 Execution Time:0.00027704238891602

UPDATE `ospos_app_config` SET `key` = 'suggestions_third_column', `value` = ''
WHERE `key` = 'suggestions_third_column' 
 Execution Time:0.0002439022064209

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'giftcard_number' 
 Execution Time:0.00025486946105957

UPDATE `ospos_app_config` SET `key` = 'giftcard_number', `value` = 'series'
WHERE `key` = 'giftcard_number' 
 Execution Time:0.00024199485778809

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'derive_sale_quantity' 
 Execution Time:0.00030612945556641

UPDATE `ospos_app_config` SET `key` = 'derive_sale_quantity', `value` = 0
WHERE `key` = 'derive_sale_quantity' 
 Execution Time:0.00025606155395508

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'multi_pack_enabled' 
 Execution Time:0.0002739429473877

UPDATE `ospos_app_config` SET `key` = 'multi_pack_enabled', `value` = 0
WHERE `key` = 'multi_pack_enabled' 
 Execution Time:0.00027799606323242

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'include_hsn' 
 Execution Time:0.00028395652770996

UPDATE `ospos_app_config` SET `key` = 'include_hsn', `value` = 0
WHERE `key` = 'include_hsn' 
 Execution Time:0.00026988983154297

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'category_dropdown' 
 Execution Time:0.0002741813659668

UPDATE `ospos_app_config` SET `key` = 'category_dropdown', `value` = 0
WHERE `key` = 'category_dropdown' 
 Execution Time:0.00028395652770996

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00217604637146

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00027298927307129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017178058624268

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023293495178223

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00016689300537109

SHOW TABLES FROM `ospos` 
 Execution Time:0.00065708160400391

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052213668823242

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026702880859375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022411346435547

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020313262939453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.00014281272888184

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.00018596649169922

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00053286552429199

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019001960754395

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0015740394592285

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.0002140998840332

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017778873443604

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022101402282715

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00020313262939453

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066590309143066

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00027894973754883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003359317779541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020909309387207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.00015616416931152

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.00019001960754395

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00016283988952637

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.0001680850982666

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:0.00020289421081543

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00032997131347656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020694732666016

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.001741886138916

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00029087066650391

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.002263069152832

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021600723266602

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017285346984863

SHOW TABLES FROM `ospos` 
 Execution Time:0.00092697143554688

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001981258392334

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026822090148926

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025391578674316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028204917907715

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0016629695892334

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00027799606323242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0019590854644775

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021696090698242

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.0001518726348877

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001671314239502

SHOW TABLES FROM `ospos` 
 Execution Time:0.00065302848815918

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014114379882812

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023317337036133

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034904479980469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021004676818848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020313262939453

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001828670501709

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00016307830810547

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00023698806762695

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021696090698242

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.0001368522644043

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023007392883301

SHOW TABLES FROM `ospos` 
 Execution Time:0.00060105323791504

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013995170593262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023412704467773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025701522827148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019407272338867

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020694732666016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

UPDATE `ospos_modules` SET `sort` = 999
WHERE `module_id` = 'office' 
 Execution Time:0.0020639896392822

UPDATE `ospos_attribute_definitions` SET `deleted` = 1
WHERE `definition_id` = -1 
 Execution Time:0.0010030269622803

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'theme' 
 Execution Time:0.00045299530029297

UPDATE `ospos_app_config` SET `key` = 'theme', `value` = 'yeti'
WHERE `key` = 'theme' 
 Execution Time:0.00043296813964844

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_sales_discount_type' 
 Execution Time:0.00026702880859375

UPDATE `ospos_app_config` SET `key` = 'default_sales_discount_type', `value` = 0
WHERE `key` = 'default_sales_discount_type' 
 Execution Time:0.00032281875610352

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_sales_discount' 
 Execution Time:0.00028300285339355

UPDATE `ospos_app_config` SET `key` = 'default_sales_discount', `value` = '0'
WHERE `key` = 'default_sales_discount' 
 Execution Time:0.00025510787963867

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_receivings_discount_type' 
 Execution Time:0.00036787986755371

UPDATE `ospos_app_config` SET `key` = 'default_receivings_discount_type', `value` = 0
WHERE `key` = 'default_receivings_discount_type' 
 Execution Time:0.00041699409484863

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_receivings_discount' 
 Execution Time:0.00025701522827148

UPDATE `ospos_app_config` SET `key` = 'default_receivings_discount', `value` = '0'
WHERE `key` = 'default_receivings_discount' 
 Execution Time:0.00025486946105957

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'enforce_privacy' 
 Execution Time:0.00025701522827148

UPDATE `ospos_app_config` SET `key` = 'enforce_privacy', `value` = 'enforce_privacy'
WHERE `key` = 'enforce_privacy' 
 Execution Time:0.00024509429931641

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receiving_calculate_average_price' 
 Execution Time:0.0002591609954834

UPDATE `ospos_app_config` SET `key` = 'receiving_calculate_average_price', `value` = 0
WHERE `key` = 'receiving_calculate_average_price' 
 Execution Time:0.00024795532226562

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'lines_per_page' 
 Execution Time:0.00030088424682617

UPDATE `ospos_app_config` SET `key` = 'lines_per_page', `value` = '25'
WHERE `key` = 'lines_per_page' 
 Execution Time:0.00029087066650391

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'notify_horizontal_position' 
 Execution Time:0.00033783912658691

UPDATE `ospos_app_config` SET `key` = 'notify_horizontal_position', `value` = 'center'
WHERE `key` = 'notify_horizontal_position' 
 Execution Time:0.00028109550476074

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'notify_vertical_position' 
 Execution Time:0.00028300285339355

UPDATE `ospos_app_config` SET `key` = 'notify_vertical_position', `value` = 'bottom'
WHERE `key` = 'notify_vertical_position' 
 Execution Time:0.00024509429931641

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_width' 
 Execution Time:0.00025606155395508

UPDATE `ospos_app_config` SET `key` = 'image_max_width', `value` = '640'
WHERE `key` = 'image_max_width' 
 Execution Time:0.000244140625

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_height' 
 Execution Time:0.00025701522827148

UPDATE `ospos_app_config` SET `key` = 'image_max_height', `value` = '480'
WHERE `key` = 'image_max_height' 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_size' 
 Execution Time:0.00027608871459961

UPDATE `ospos_app_config` SET `key` = 'image_max_size', `value` = '128'
WHERE `key` = 'image_max_size' 
 Execution Time:0.00030398368835449

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_allowed_types' 
 Execution Time:0.00029587745666504

UPDATE `ospos_app_config` SET `key` = 'image_allowed_types', `value` = 'jpg|gif|png'
WHERE `key` = 'image_allowed_types' 
 Execution Time:0.00027799606323242

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_enable' 
 Execution Time:0.00025510787963867

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_enable', `value` = 0
WHERE `key` = 'gcaptcha_enable' 
 Execution Time:0.000244140625

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_secret_key' 
 Execution Time:0.00025105476379395

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_secret_key', `value` = '6LfHckoaAAAAABG92_lqjVbFFInGZYwBcwlwhKpp'
WHERE `key` = 'gcaptcha_secret_key' 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_site_key' 
 Execution Time:0.00025200843811035

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_site_key', `value` = '6LfHckoaAAAAAFCtiUYLvfVs33gEfLtpwuHeOfmP'
WHERE `key` = 'gcaptcha_site_key' 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_first_column' 
 Execution Time:0.00025105476379395

UPDATE `ospos_app_config` SET `key` = 'suggestions_first_column', `value` = 'name'
WHERE `key` = 'suggestions_first_column' 
 Execution Time:0.00027990341186523

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_second_column' 
 Execution Time:0.00025415420532227

UPDATE `ospos_app_config` SET `key` = 'suggestions_second_column', `value` = ''
WHERE `key` = 'suggestions_second_column' 
 Execution Time:0.00027704238891602

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_third_column' 
 Execution Time:0.00026702880859375

UPDATE `ospos_app_config` SET `key` = 'suggestions_third_column', `value` = ''
WHERE `key` = 'suggestions_third_column' 
 Execution Time:0.00024104118347168

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'giftcard_number' 
 Execution Time:0.0002741813659668

UPDATE `ospos_app_config` SET `key` = 'giftcard_number', `value` = 'series'
WHERE `key` = 'giftcard_number' 
 Execution Time:0.00024199485778809

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'derive_sale_quantity' 
 Execution Time:0.00025200843811035

UPDATE `ospos_app_config` SET `key` = 'derive_sale_quantity', `value` = 0
WHERE `key` = 'derive_sale_quantity' 
 Execution Time:0.00024104118347168

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'multi_pack_enabled' 
 Execution Time:0.00027012825012207

UPDATE `ospos_app_config` SET `key` = 'multi_pack_enabled', `value` = 0
WHERE `key` = 'multi_pack_enabled' 
 Execution Time:0.00024795532226562

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'include_hsn' 
 Execution Time:0.0002591609954834

UPDATE `ospos_app_config` SET `key` = 'include_hsn', `value` = 0
WHERE `key` = 'include_hsn' 
 Execution Time:0.00024509429931641

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'category_dropdown' 
 Execution Time:0.0003199577331543

UPDATE `ospos_app_config` SET `key` = 'category_dropdown', `value` = 0
WHERE `key` = 'category_dropdown' 
 Execution Time:0.0002591609954834

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00016093254089355

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00023889541625977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00014114379882812

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023603439331055

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.0001521110534668

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001680850982666

SHOW TABLES FROM `ospos` 
 Execution Time:0.00061893463134766

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001368522644043

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00059914588928223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031399726867676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021719932556152

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019288063049316

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.00018692016601562

SELECT *
FROM `ospos_dinner_tables`
WHERE `deleted` = 0 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_customers_packages`
WHERE `deleted` = 0 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.00014114379882812

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.0001521110534668

SELECT `sort`
FROM `ospos_grants`, `ospos_modules`
WHERE `module_id` = 'office' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_app_config`
WHERE `key` = 'mailchimp_api_key'
 LIMIT 1 
 Execution Time:0.00051307678222656

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002140998840332

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.001655101776123

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00025010108947754

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0019001960754395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022983551025391

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001671314239502

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070500373840332

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0023770332336426

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002739429473877

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017809867858887

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017189979553223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018095970153809

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00027203559875488

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.028402805328369

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.002187967300415

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0012471675872803

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00014281272888184

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001680850982666

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070595741271973

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014114379882812

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003359317779541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024604797363281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022292137145996

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019311904907227

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017714500427246

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0020151138305664

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00021195411682129

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'config%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0001518726348877

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'config!_%' ESCAPE '!' 
 Execution Time:0.00013995170593262

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018596649169922

SHOW TABLES FROM `ospos` 
 Execution Time:0.0005950927734375

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013995170593262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023794174194336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002598762512207

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017213821411133

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017881393432617

UPDATE `ospos_modules` SET `sort` = 999
WHERE `module_id` = 'office' 
 Execution Time:0.0023560523986816

UPDATE `ospos_attribute_definitions` SET `deleted` = 1
WHERE `definition_id` = -1 
 Execution Time:0.0016100406646729

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'theme' 
 Execution Time:0.00035500526428223

UPDATE `ospos_app_config` SET `key` = 'theme', `value` = 'paper'
WHERE `key` = 'theme' 
 Execution Time:0.00061607360839844

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_sales_discount_type' 
 Execution Time:0.00027298927307129

UPDATE `ospos_app_config` SET `key` = 'default_sales_discount_type', `value` = 0
WHERE `key` = 'default_sales_discount_type' 
 Execution Time:0.00031304359436035

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_sales_discount' 
 Execution Time:0.00031304359436035

UPDATE `ospos_app_config` SET `key` = 'default_sales_discount', `value` = '0'
WHERE `key` = 'default_sales_discount' 
 Execution Time:0.00028300285339355

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_receivings_discount_type' 
 Execution Time:0.00028395652770996

UPDATE `ospos_app_config` SET `key` = 'default_receivings_discount_type', `value` = 0
WHERE `key` = 'default_receivings_discount_type' 
 Execution Time:0.00027322769165039

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'default_receivings_discount' 
 Execution Time:0.00028610229492188

UPDATE `ospos_app_config` SET `key` = 'default_receivings_discount', `value` = '0'
WHERE `key` = 'default_receivings_discount' 
 Execution Time:0.00028014183044434

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'enforce_privacy' 
 Execution Time:0.00029397010803223

UPDATE `ospos_app_config` SET `key` = 'enforce_privacy', `value` = 'enforce_privacy'
WHERE `key` = 'enforce_privacy' 
 Execution Time:0.0002598762512207

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'receiving_calculate_average_price' 
 Execution Time:0.00028204917907715

UPDATE `ospos_app_config` SET `key` = 'receiving_calculate_average_price', `value` = 0
WHERE `key` = 'receiving_calculate_average_price' 
 Execution Time:0.00026702880859375

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'lines_per_page' 
 Execution Time:0.00028085708618164

UPDATE `ospos_app_config` SET `key` = 'lines_per_page', `value` = '25'
WHERE `key` = 'lines_per_page' 
 Execution Time:0.00030303001403809

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'notify_horizontal_position' 
 Execution Time:0.00028181076049805

UPDATE `ospos_app_config` SET `key` = 'notify_horizontal_position', `value` = 'center'
WHERE `key` = 'notify_horizontal_position' 
 Execution Time:0.00029277801513672

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'notify_vertical_position' 
 Execution Time:0.00031018257141113

UPDATE `ospos_app_config` SET `key` = 'notify_vertical_position', `value` = 'bottom'
WHERE `key` = 'notify_vertical_position' 
 Execution Time:0.00040006637573242

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_width' 
 Execution Time:0.00037407875061035

UPDATE `ospos_app_config` SET `key` = 'image_max_width', `value` = '640'
WHERE `key` = 'image_max_width' 
 Execution Time:0.00031399726867676

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_height' 
 Execution Time:0.00028395652770996

UPDATE `ospos_app_config` SET `key` = 'image_max_height', `value` = '480'
WHERE `key` = 'image_max_height' 
 Execution Time:0.00025701522827148

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_max_size' 
 Execution Time:0.00027704238891602

UPDATE `ospos_app_config` SET `key` = 'image_max_size', `value` = '128'
WHERE `key` = 'image_max_size' 
 Execution Time:0.00026917457580566

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'image_allowed_types' 
 Execution Time:0.00030684471130371

UPDATE `ospos_app_config` SET `key` = 'image_allowed_types', `value` = 'jpg|gif|png'
WHERE `key` = 'image_allowed_types' 
 Execution Time:0.00027298927307129

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_enable' 
 Execution Time:0.00029802322387695

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_enable', `value` = 0
WHERE `key` = 'gcaptcha_enable' 
 Execution Time:0.00029301643371582

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_secret_key' 
 Execution Time:0.00028586387634277

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_secret_key', `value` = '6LfHckoaAAAAABG92_lqjVbFFInGZYwBcwlwhKpp'
WHERE `key` = 'gcaptcha_secret_key' 
 Execution Time:0.00027799606323242

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'gcaptcha_site_key' 
 Execution Time:0.00029802322387695

UPDATE `ospos_app_config` SET `key` = 'gcaptcha_site_key', `value` = '6LfHckoaAAAAAFCtiUYLvfVs33gEfLtpwuHeOfmP'
WHERE `key` = 'gcaptcha_site_key' 
 Execution Time:0.0002598762512207

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_first_column' 
 Execution Time:0.00032687187194824

UPDATE `ospos_app_config` SET `key` = 'suggestions_first_column', `value` = 'name'
WHERE `key` = 'suggestions_first_column' 
 Execution Time:0.00025582313537598

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_second_column' 
 Execution Time:0.00029492378234863

UPDATE `ospos_app_config` SET `key` = 'suggestions_second_column', `value` = ''
WHERE `key` = 'suggestions_second_column' 
 Execution Time:0.00025391578674316

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'suggestions_third_column' 
 Execution Time:0.00026702880859375

UPDATE `ospos_app_config` SET `key` = 'suggestions_third_column', `value` = ''
WHERE `key` = 'suggestions_third_column' 
 Execution Time:0.00029206275939941

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'giftcard_number' 
 Execution Time:0.00032496452331543

UPDATE `ospos_app_config` SET `key` = 'giftcard_number', `value` = 'series'
WHERE `key` = 'giftcard_number' 
 Execution Time:0.00033211708068848

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'derive_sale_quantity' 
 Execution Time:0.00032591819763184

UPDATE `ospos_app_config` SET `key` = 'derive_sale_quantity', `value` = 0
WHERE `key` = 'derive_sale_quantity' 
 Execution Time:0.00031900405883789

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'multi_pack_enabled' 
 Execution Time:0.00026798248291016

UPDATE `ospos_app_config` SET `key` = 'multi_pack_enabled', `value` = 0
WHERE `key` = 'multi_pack_enabled' 
 Execution Time:0.00025320053100586

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'include_hsn' 
 Execution Time:0.00026392936706543

UPDATE `ospos_app_config` SET `key` = 'include_hsn', `value` = 0
WHERE `key` = 'include_hsn' 
 Execution Time:0.00025296211242676

SELECT *
FROM `ospos_app_config`
WHERE `ospos_app_config`.`key` = 'category_dropdown' 
 Execution Time:0.00026178359985352

UPDATE `ospos_app_config` SET `key` = 'category_dropdown', `value` = 0
WHERE `key` = 'category_dropdown' 
 Execution Time:0.00027704238891602

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00016307830810547

SELECT GET_LOCK('b188cf8dea5693b0c50c794b34e237dd', 300) AS ci_session_lock 
 Execution Time:0.00023698806762695

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00016880035400391

UPDATE `ospos_sessions` SET `timestamp` = 1613805138, `data` = '__ci_last_regenerate|i:1613805138;person_id|s:1:\"1\";menu_group|s:6:\"office\";'
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0057318210601807

SELECT RELEASE_LOCK('b188cf8dea5693b0c50c794b34e237dd') AS ci_session_lock 
 Execution Time:0.0002288818359375

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'ain00a74rtdu9ta3e8a1p1cg79b5vrad'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.00187087059021

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.0001978874206543

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0016820430755615

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029611587524414

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'taxes%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'taxes!_%' ESCAPE '!' 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017404556274414

SHOW TABLES FROM `ospos` 
 Execution Time:0.00080490112304688

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00068902969360352

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00033211708068848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002138614654541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029182434082031

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018692016601562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024700164794922

SELECT *
FROM `ospos_tax_codes`
WHERE `deleted` = 0
ORDER BY `tax_code_name` ASC 
 Execution Time:0.00022697448730469

SELECT *
FROM `ospos_tax_categories`
WHERE `deleted` = 0
ORDER BY `tax_group_sequence` ASC, `tax_category` ASC 
 Execution Time:0.00023818016052246

SELECT *
FROM `ospos_tax_jurisdictions`
WHERE `deleted` = 0
ORDER BY `jurisdiction_name` ASC 
 Execution Time:0.00019192695617676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025606155395508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022482872009277

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0021729469299316

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.00027012825012207

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0027749538421631

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003509521484375

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'taxes%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00018405914306641

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'taxes!_%' ESCAPE '!' 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('office', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023412704467773

SHOW TABLES FROM `ospos` 
 Execution Time:0.000885009765625

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001518726348877

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026202201843262

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00035500526428223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020194053649902

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017809867858887

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020909309387207

SELECT `tax_rate_id`, `tax_code`, `rate_tax_code_id`, `tax_code_name`, `rate_jurisdiction_id`, `jurisdiction_name`, `rate_tax_category_id`, `tax_category`, `tax_rate`, `tax_rounding_code`
FROM `ospos_tax_rates`
LEFT JOIN `ospos_tax_codes` ON `rate_tax_code_id` = `tax_code_id`
LEFT JOIN `ospos_tax_categories` ON `rate_tax_category_id` = `tax_category_id`
LEFT JOIN `ospos_tax_jurisdictions` ON `rate_jurisdiction_id` = `jurisdiction_id`
 LIMIT 25 
 Execution Time:0.00020194053649902

SELECT COUNT(tax_rate_id) as count
FROM `ospos_tax_rates`
LEFT JOIN `ospos_tax_codes` ON `rate_tax_code_id` = `tax_code_id`
LEFT JOIN `ospos_tax_categories` ON `rate_tax_category_id` = `tax_category_id`
LEFT JOIN `ospos_tax_jurisdictions` ON `rate_jurisdiction_id` = `jurisdiction_id` 
 Execution Time:0.00018501281738281

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0020780563354492

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.00021791458129883

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0019021034240723

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031900405883789

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
 Execution Time:0.00019598007202148

SHOW TABLES FROM `ospos` 
 Execution Time:0.00067996978759766

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
 Execution Time:0.00033307075500488

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024580955505371

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002131462097168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018405914306641

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0019650459289551

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.00021791458129883

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.001802921295166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026106834411621

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'cashups%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00021505355834961

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'cashups!_%' ESCAPE '!' 
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023508071899414

SHOW TABLES FROM `ospos` 
 Execution Time:0.00087594985961914

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00019311904907227

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00040793418884277

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031900405883789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029110908508301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00032806396484375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029110908508301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023794174194336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00030112266540527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001828670501709

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0016040802001953

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.0002131462097168

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017609596252441

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'cashups%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00020503997802734

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'cashups!_%' ESCAPE '!' 
 Execution Time:0.00014019012451172

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
 Execution Time:0.00074481964111328

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023603439331055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023698806762695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001988410949707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017714500427246

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016880035400391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018095970153809

SELECT `cash_up`.`cashup_id`, MAX(cash_up.open_date) AS open_date, MAX(cash_up.close_date) AS close_date, MAX(cash_up.open_amount_cash) AS open_amount_cash, MAX(cash_up.transfer_amount_cash) AS transfer_amount_cash, MAX(cash_up.closed_amount_cash) AS closed_amount_cash, MAX(cash_up.closed_amount_due) AS closed_amount_due, MAX(cash_up.closed_amount_card) AS closed_amount_card, MAX(cash_up.closed_amount_check) AS closed_amount_check, MAX(cash_up.closed_amount_total) AS closed_amount_total, MAX(cash_up.description) AS description, MAX(cash_up.note) AS note, MAX(cash_up.open_employee_id) AS open_employee_id, MAX(cash_up.close_employee_id) AS close_employee_id, MAX(open_employees.first_name) AS open_first_name, MAX(open_employees.last_name) AS open_last_name, MAX(close_employees.first_name) AS close_first_name, MAX(close_employees.last_name) AS close_last_name
FROM `ospos_cash_up` AS `cash_up`
LEFT JOIN `ospos_people` AS `open_employees` ON `open_employees`.`person_id` = `cash_up`.`open_employee_id`
LEFT JOIN `ospos_people` AS `close_employees` ON `close_employees`.`person_id` = `cash_up`.`close_employee_id`
WHERE   (
`cash_up`.`open_date` LIKE '%%' ESCAPE '!'
OR  `open_employees`.`first_name` LIKE '%%' ESCAPE '!'
OR  `open_employees`.`last_name` LIKE '%%' ESCAPE '!'
OR  `close_employees`.`first_name` LIKE '%%' ESCAPE '!'
OR  `close_employees`.`last_name` LIKE '%%' ESCAPE '!'
OR  `cash_up`.`closed_amount_total` LIKE '%%' ESCAPE '!'
OR  CONCAT(open_employees.first_name, " ", open_employees.last_name) LIKE '%%' ESCAPE '!'
OR  CONCAT(close_employees.first_name, " ", close_employees.last_name) LIKE '%%' ESCAPE '!'
 )
AND `cash_up`.`deleted` = 0
AND DATE_FORMAT(cash_up.open_date, "%Y-%m-%d") BETWEEN '2021-02-20' AND '2021-02-20'
GROUP BY `cashup_id`
 LIMIT 25 
 Execution Time:0.00095295906066895

SELECT COUNT(cash_up.cashup_id) as count, `cash_up`.`cashup_id`, MAX(cash_up.open_date) AS open_date, MAX(cash_up.close_date) AS close_date, MAX(cash_up.open_amount_cash) AS open_amount_cash, MAX(cash_up.transfer_amount_cash) AS transfer_amount_cash, MAX(cash_up.closed_amount_cash) AS closed_amount_cash, MAX(cash_up.closed_amount_due) AS closed_amount_due, MAX(cash_up.closed_amount_card) AS closed_amount_card, MAX(cash_up.closed_amount_check) AS closed_amount_check, MAX(cash_up.closed_amount_total) AS closed_amount_total, MAX(cash_up.description) AS description, MAX(cash_up.note) AS note, MAX(cash_up.open_employee_id) AS open_employee_id, MAX(cash_up.close_employee_id) AS close_employee_id, MAX(open_employees.first_name) AS open_first_name, MAX(open_employees.last_name) AS open_last_name, MAX(close_employees.first_name) AS close_first_name, MAX(close_employees.last_name) AS close_last_name
FROM `ospos_cash_up` AS `cash_up`
LEFT JOIN `ospos_people` AS `open_employees` ON `open_employees`.`person_id` = `cash_up`.`open_employee_id`
LEFT JOIN `ospos_people` AS `close_employees` ON `close_employees`.`person_id` = `cash_up`.`close_employee_id`
WHERE   (
`cash_up`.`open_date` LIKE '%%' ESCAPE '!'
OR  `open_employees`.`first_name` LIKE '%%' ESCAPE '!'
OR  `open_employees`.`last_name` LIKE '%%' ESCAPE '!'
OR  `close_employees`.`first_name` LIKE '%%' ESCAPE '!'
OR  `close_employees`.`last_name` LIKE '%%' ESCAPE '!'
OR  `cash_up`.`closed_amount_total` LIKE '%%' ESCAPE '!'
OR  CONCAT(open_employees.first_name, " ", open_employees.last_name) LIKE '%%' ESCAPE '!'
OR  CONCAT(close_employees.first_name, " ", close_employees.last_name) LIKE '%%' ESCAPE '!'
 )
AND `cash_up`.`deleted` = 0
AND DATE_FORMAT(cash_up.open_date, "%Y-%m-%d") BETWEEN '2021-02-20' AND '2021-02-20'
GROUP BY `cashup_id` 
 Execution Time:0.00076603889465332

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0018279552459717

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.00026392936706543

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0019509792327881

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002748966217041

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'cashups%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'cashups!_%' ESCAPE '!' 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018715858459473

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070619583129883

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030112266540527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031805038452148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022602081298828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022387504577637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017809867858887

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002138614654541

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_employees`.`person_id` = `ospos_people`.`person_id`
WHERE `deleted` = 0
ORDER BY `last_name` ASC
 LIMIT 10000 
 Execution Time:0.001655101776123

SELECT `cash_up`.`cashup_id` AS `cashup_id`, `cash_up`.`open_date` AS `open_date`, `cash_up`.`close_date` AS `close_date`, `cash_up`.`open_amount_cash` AS `open_amount_cash`, `cash_up`.`transfer_amount_cash` AS `transfer_amount_cash`, `cash_up`.`closed_amount_cash` AS `closed_amount_cash`, `cash_up`.`closed_amount_due` AS `closed_amount_due`, `cash_up`.`closed_amount_card` AS `closed_amount_card`, `cash_up`.`closed_amount_check` AS `closed_amount_check`, `cash_up`.`closed_amount_total` AS `closed_amount_total`, `cash_up`.`description` AS `description`, `cash_up`.`note` AS `note`, `cash_up`.`open_employee_id` AS `open_employee_id`, `cash_up`.`close_employee_id` AS `close_employee_id`, `cash_up`.`deleted` AS `deleted`, `open_employees`.`first_name` AS `open_first_name`, `open_employees`.`last_name` AS `open_last_name`, `close_employees`.`first_name` AS `close_first_name`, `close_employees`.`last_name` AS `close_last_name`
FROM `ospos_cash_up` AS `cash_up`
LEFT JOIN `ospos_people` AS `open_employees` ON `open_employees`.`person_id` = `cash_up`.`open_employee_id`
LEFT JOIN `ospos_people` AS `close_employees` ON `close_employees`.`person_id` = `cash_up`.`close_employee_id`
WHERE `cashup_id` = -1 
 Execution Time:0.00060510635375977

SHOW COLUMNS FROM `ospos_cash_up` 
 Execution Time:0.0011751651763916

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002129077911377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001978874206543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020408630371094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018119812011719

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019502639770508

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0018899440765381

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.00024795532226562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0021169185638428

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00045299530029297

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'suppliers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015687942504883

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'suppliers!_%' ESCAPE '!' 
 Execution Time:0.0002131462097168

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00025510787963867

SHOW TABLES FROM `ospos` 
 Execution Time:0.00080418586730957

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029921531677246

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003058910369873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'messages'
 LIMIT 1 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023293495178223

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0016698837280273

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.00022101402282715

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0018229484558105

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021696090698242

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'suppliers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014710426330566

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'suppliers!_%' ESCAPE '!' 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023388862609863

SHOW TABLES FROM `ospos` 
 Execution Time:0.00063490867614746

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001828670501709

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0002901554107666

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025200843811035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018620491027832

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020384788513184

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_suppliers` AS `suppliers`
JOIN `ospos_people` ON `suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  `agency_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.00034117698669434

SELECT COUNT(suppliers.person_id) as count
FROM `ospos_suppliers` AS `suppliers`
JOIN `ospos_people` ON `suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  `agency_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.0001380443572998

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0019478797912598

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.00020813941955566

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0020430088043213

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00016093254089355

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018000602722168

SHOW TABLES FROM `ospos` 
 Execution Time:0.00069117546081543

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00024008750915527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029706954956055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021004676818848

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001988410949707

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018119812011719

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1' 
 Execution Time:0.00020694732666016

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00023484230041504

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_receivings'
 LIMIT 1 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_customers'
 LIMIT 1 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_discounts'
 LIMIT 1 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_employees'
 LIMIT 1 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_suppliers'
 LIMIT 1 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_inventory'
 LIMIT 1 
 Execution Time:0.00014305114746094

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0016689300537109

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.0005190372467041

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0021860599517822

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024080276489258

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015616416931152

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00014185905456543

SHOW TABLES FROM `ospos` 
 Execution Time:0.00072693824768066

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014090538024902

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00022697448730469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026512145996094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000244140625

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002129077911377

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001828670501709

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00032305717468262

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0021200180053711

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.00022506713867188

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0018179416656494

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021696090698242

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'reports%' ESCAPE '!'
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
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00014400482177734

SHOW TABLES FROM `ospos` 
 Execution Time:0.00068402290344238

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015687942504883

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023007392883301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00025081634521484

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018692016601562

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019693374633789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017714500427246

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 2
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00058579444885254

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_taxes_temp (INDEX(sale_id), INDEX(item_id)) ENGINE=MEMORY
			(
				SELECT sales_items_taxes.sale_id AS sale_id,
					sales_items_taxes.item_id AS item_id,
					sales_items_taxes.line AS line,
					SUM(sales_items_taxes.item_tax_amount) AS tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 0 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS internal_tax,
					SUM(CASE WHEN sales_items_taxes.tax_type = 1 THEN sales_items_taxes.item_tax_amount ELSE 0 END) AS sales_tax
				FROM ospos_sales_items_taxes AS sales_items_taxes
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = sales_items_taxes.sale_id
				INNER JOIN ospos_sales_items AS sales_items
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sales.sale_time) BETWEEN '2021-01-22' AND '2021-02-20'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.0038771629333496

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_payments_temp (PRIMARY KEY(sale_id), INDEX(sale_id))
			(
				SELECT payments.sale_id AS sale_id,
					IFNULL(SUM(payments.payment_amount), 0) AS sale_payment_amount,
					GROUP_CONCAT(CONCAT(payments.payment_type, " ", (payments.payment_amount - payments.cash_refund)) SEPARATOR ", ") AS payment_type
				FROM ospos_sales_payments AS payments
				INNER JOIN ospos_sales AS sales
					ON sales.sale_id = payments.sale_id
				WHERE DATE(sales.sale_time) BETWEEN '2021-01-22' AND '2021-02-20'
				GROUP BY payments.sale_id
			) 
 Execution Time:0.01606297492981

CREATE TEMPORARY TABLE IF NOT EXISTS ospos_sales_items_temp (INDEX(sale_date), INDEX(sale_time), INDEX(sale_id))
			(
				SELECT
					MAX(DATE(sales.sale_time)) AS sale_date,
					MAX(sales.sale_time) AS sale_time,
					sales.sale_id AS sale_id,
					MAX(sales.sale_status) AS sale_status,
					MAX(sales.sale_type) AS sale_type,
					MAX(sales.comment) AS comment,
					MAX(sales.invoice_number) AS invoice_number,
					MAX(sales.quote_number) AS quote_number,
					MAX(sales.customer_id) AS customer_id,
					MAX(CONCAT(customer_p.first_name, " ", customer_p.last_name)) AS customer_name,
					MAX(customer_p.first_name) AS customer_first_name,
					MAX(customer_p.last_name) AS customer_last_name,
					MAX(customer_p.email) AS customer_email,
					MAX(customer_p.comments) AS customer_comments,
					MAX(customer.company_name) AS customer_company_name,
					MAX(sales.employee_id) AS employee_id,
					MAX(CONCAT(employee.first_name, " ", employee.last_name)) AS employee_name,
					items.item_id AS item_id,
					MAX(items.name) AS name,
					MAX(items.item_number) AS item_number,
					MAX(items.category) AS category,
					MAX(items.supplier_id) AS supplier_id,
					MAX(sales_items.quantity_purchased) AS quantity_purchased,
					MAX(sales_items.item_cost_price) AS item_cost_price,
					MAX(sales_items.item_unit_price) AS item_unit_price,
					MAX(sales_items.discount) AS discount,
					sales_items.discount_type AS discount_type,
					sales_items.line AS line,
					MAX(sales_items.serialnumber) AS serialnumber,
					MAX(sales_items.item_location) AS item_location,
					MAX(sales_items.description) AS description,
					MAX(payments.payment_type) AS payment_type,
					MAX(payments.sale_payment_amount) AS sale_payment_amount,
					
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 0) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) AS subtotal,
					IFNULL(SUM(sales_items_taxes.tax), 0) AS tax,
					ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 0) AS total,
					SUM(sales_items.item_cost_price * sales_items.quantity_purchased) AS cost,
					(ROUND(SUM(CASE WHEN sales_items.discount_type = 0 THEN sales_items.item_unit_price * sales_items.quantity_purchased * (1 - sales_items.discount / 100) ELSE sales_items.item_unit_price * sales_items.quantity_purchased - sales_items.discount END), 0) - IFNULL(SUM(sales_items_taxes.internal_tax), 0) - SUM(sales_items.item_cost_price * sales_items.quantity_purchased)) AS profit
					
				FROM ospos_sales_items AS sales_items
				INNER JOIN ospos_sales AS sales
					ON sales_items.sale_id = sales.sale_id
				INNER JOIN ospos_items AS items
					ON sales_items.item_id = items.item_id
				LEFT OUTER JOIN ospos_sales_payments_temp AS payments
					ON sales_items.sale_id = payments.sale_id
				LEFT OUTER JOIN ospos_suppliers AS supplier
					ON items.supplier_id = supplier.person_id
				LEFT OUTER JOIN ospos_people AS customer_p
					ON sales.customer_id = customer_p.person_id
				LEFT OUTER JOIN ospos_customers AS customer
					ON sales.customer_id = customer.person_id
				LEFT OUTER JOIN ospos_people AS employee
					ON sales.employee_id = employee.person_id
				LEFT OUTER JOIN ospos_sales_items_taxes_temp AS sales_items_taxes
					ON sales_items.sale_id = sales_items_taxes.sale_id AND sales_items.item_id = sales_items_taxes.item_id AND sales_items.line = sales_items_taxes.line
				WHERE DATE(sales.sale_time) BETWEEN '2021-01-22' AND '2021-02-20'
				GROUP BY sale_id, item_id, line
			) 
 Execution Time:0.050737142562866

DROP TEMPORARY TABLE IF EXISTS ospos_sales_payments_temp 
 Execution Time:0.0048909187316895

DROP TEMPORARY TABLE IF EXISTS ospos_sales_items_taxes_temp 
 Execution Time:0.00030899047851562

SELECT `sale_id`, MAX(CASE
			WHEN sale_type = 0 && sale_status = 0 THEN 'POS'			
			WHEN sale_type = 1 && sale_status = 0 THEN 'INV'
			WHEN sale_type = 2 && sale_status = 1 THEN 'OdT'
			WHEN sale_type = 3 && sale_status = 1 THEN 'Q'
			WHEN sale_type = 4 && sale_status = 0 THEN 'RET'
			WHEN sale_status = 2 THEN 'CNL'
			ELSE ''
			END) AS type_code, MAX(sale_status) as sale_status, MAX(sale_date) AS sale_date, SUM(quantity_purchased) AS items_purchased, MAX(employee_name) AS employee_name, MAX(customer_name) AS customer_name, SUM(subtotal) AS subtotal, SUM(tax) AS tax, SUM(total) AS total, SUM(cost) AS cost, SUM(profit) AS profit, MAX(payment_type) AS payment_type, MAX(comment) AS comment
FROM `ospos_sales_items_temp`
WHERE `sale_status` = 0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 )
GROUP BY `sale_id`
ORDER BY MAX(sale_date) 
 Execution Time:0.0076279640197754

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '1'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0020849704742432

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '1' 
 Execution Time:0.00034594535827637

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '2'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00090885162353516

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '2' 
 Execution Time:0.00032997131347656

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '3'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0010411739349365

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '3' 
 Execution Time:0.00048303604125977

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '4'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00080704689025879

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '4' 
 Execution Time:0.00031113624572754

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '5'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00094103813171387

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '5' 
 Execution Time:0.00043892860412598

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '6'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00087404251098633

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '6' 
 Execution Time:0.0003819465637207

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '7'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00093412399291992

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '7' 
 Execution Time:0.00035190582275391

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '8'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00097894668579102

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '8' 
 Execution Time:0.00039887428283691

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '9'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0008389949798584

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '9' 
 Execution Time:0.00031685829162598

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '10'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00081396102905273

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '10' 
 Execution Time:0.00032591819763184

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '11'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00087690353393555

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '11' 
 Execution Time:0.00033998489379883

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '12'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00091910362243652

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '12' 
 Execution Time:0.00032997131347656

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '13'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00089597702026367

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '13' 
 Execution Time:0.00030899047851562

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '14'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00078606605529785

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '14' 
 Execution Time:0.00032997131347656

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '15'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00077104568481445

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '15' 
 Execution Time:0.00031280517578125

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '16'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00084877014160156

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '16' 
 Execution Time:0.00031685829162598

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '19'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0010349750518799

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '19' 
 Execution Time:0.0003359317779541

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '20'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00084686279296875

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '20' 
 Execution Time:0.00030612945556641

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '21'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00078701972961426

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '21' 
 Execution Time:0.00034284591674805

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '22'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00090599060058594

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '22' 
 Execution Time:0.0003199577331543

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '23'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00095796585083008

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '23' 
 Execution Time:0.00035500526428223

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '24'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00081300735473633

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '24' 
 Execution Time:0.00034284591674805

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '25'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00086593627929688

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '25' 
 Execution Time:0.00044512748718262

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '26'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00090909004211426

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '26' 
 Execution Time:0.00030803680419922

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '27'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00083804130554199

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '27' 
 Execution Time:0.00030708312988281

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '28'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00085115432739258

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '28' 
 Execution Time:0.00033307075500488

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '29'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00078201293945312

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '29' 
 Execution Time:0.00046920776367188

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '30'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00082492828369141

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '30' 
 Execution Time:0.00034618377685547

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '31'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00085997581481934

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '31' 
 Execution Time:0.00032305717468262

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '34'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00085282325744629

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '34' 
 Execution Time:0.00032186508178711

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '35'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00089907646179199

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '35' 
 Execution Time:0.00030422210693359

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '36'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00078701972961426

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '36' 
 Execution Time:0.00029897689819336

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '38'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00082516670227051

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '38' 
 Execution Time:0.00034189224243164

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '39'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00077605247497559

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '39' 
 Execution Time:0.00030708312988281

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '40'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0009911060333252

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '40' 
 Execution Time:0.00040602684020996

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '41'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00076889991760254

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '41' 
 Execution Time:0.00031185150146484

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '42'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00077605247497559

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '42' 
 Execution Time:0.00038385391235352

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '43'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0011110305786133

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '43' 
 Execution Time:0.00031113624572754

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '44'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0008549690246582

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '44' 
 Execution Time:0.00044107437133789

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '45'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0010831356048584

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '45' 
 Execution Time:0.00030899047851562

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '46'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00091004371643066

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '46' 
 Execution Time:0.00030899047851562

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '47'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00095510482788086

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '47' 
 Execution Time:0.00031900405883789

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '48'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00087499618530273

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '48' 
 Execution Time:0.00038790702819824

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '49'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00086402893066406

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '49' 
 Execution Time:0.00039005279541016

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '50'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0010671615600586

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '50' 
 Execution Time:0.00037980079650879

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '51'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0010120868682861

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '51' 
 Execution Time:0.00037717819213867

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '52'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00092387199401855

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '52' 
 Execution Time:0.00030517578125

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '53'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0010371208190918

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '53' 
 Execution Time:0.00036811828613281

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '54'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00099897384643555

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '54' 
 Execution Time:0.00032782554626465

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '55'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00092911720275879

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '55' 
 Execution Time:0.00041294097900391

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '56'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00084805488586426

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '56' 
 Execution Time:0.00040102005004883

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '57'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00098299980163574

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '57' 
 Execution Time:0.00039887428283691

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '58'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0010128021240234

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '58' 
 Execution Time:0.00037693977355957

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '59'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.001060962677002

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '59' 
 Execution Time:0.0004580020904541

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '61'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00090503692626953

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '61' 
 Execution Time:0.00039100646972656

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '62'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00085306167602539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '62' 
 Execution Time:0.0003359317779541

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '65'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00076818466186523

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '65' 
 Execution Time:0.00030994415283203

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '66'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00078511238098145

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '66' 
 Execution Time:0.00041794776916504

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '67'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00087690353393555

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '67' 
 Execution Time:0.00030303001403809

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '68'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00079083442687988

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '68' 
 Execution Time:0.0003209114074707

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '69'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0010499954223633

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '69' 
 Execution Time:0.00033402442932129

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '70'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00084781646728516

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '70' 
 Execution Time:0.00031709671020508

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '71'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00078606605529785

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '71' 
 Execution Time:0.00030016899108887

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '72'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00080680847167969

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '72' 
 Execution Time:0.00030112266540527

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '73'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00079607963562012

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '73' 
 Execution Time:0.00031208992004395

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '74'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.001384973526001

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '74' 
 Execution Time:0.00023007392883301

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '75'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00055789947509766

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '75' 
 Execution Time:0.00023412704467773

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '76'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00061488151550293

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '76' 
 Execution Time:0.00023579597473145

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '77'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00064992904663086

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '77' 
 Execution Time:0.00021982192993164

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '78'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00055408477783203

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '78' 
 Execution Time:0.0002439022064209

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '79'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00060796737670898

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '79' 
 Execution Time:0.00022196769714355

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '80'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00055503845214844

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '80' 
 Execution Time:0.00024199485778809

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '81'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00055193901062012

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '81' 
 Execution Time:0.00022411346435547

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '82'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00066280364990234

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '82' 
 Execution Time:0.00024294853210449

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '83'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00062394142150879

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '83' 
 Execution Time:0.00022697448730469

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '84'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00067281723022461

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '84' 
 Execution Time:0.00024604797363281

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '85'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053501129150391

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '85' 
 Execution Time:0.00022697448730469

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '86'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00058388710021973

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '86' 
 Execution Time:0.00022196769714355

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '87'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0006110668182373

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '87' 
 Execution Time:0.00024604797363281

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '88'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00061702728271484

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '88' 
 Execution Time:0.00022292137145996

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '89'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053691864013672

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '89' 
 Execution Time:0.00021481513977051

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '90'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00065183639526367

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '90' 
 Execution Time:0.00026988983154297

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '91'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00065517425537109

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '91' 
 Execution Time:0.00022315979003906

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '92'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00060105323791504

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '92' 
 Execution Time:0.00022196769714355

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '93'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00060701370239258

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '93' 
 Execution Time:0.00022006034851074

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '94'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00062894821166992

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '94' 
 Execution Time:0.00021791458129883

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '95'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053787231445312

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '95' 
 Execution Time:0.00021791458129883

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '96'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00059700012207031

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '96' 
 Execution Time:0.00025701522827148

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '97'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00066614151000977

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '97' 
 Execution Time:0.00022506713867188

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '98'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00058293342590332

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '98' 
 Execution Time:0.00025701522827148

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '99'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00065302848815918

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '99' 
 Execution Time:0.00022387504577637

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '100'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00063395500183105

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '100' 
 Execution Time:0.00023388862609863

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '101'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00063014030456543

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '101' 
 Execution Time:0.00025200843811035

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '102'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00054287910461426

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '102' 
 Execution Time:0.00024318695068359

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '103'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0007021427154541

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '103' 
 Execution Time:0.00024795532226562

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '104'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00059914588928223

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '104' 
 Execution Time:0.00022387504577637

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '105'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00061202049255371

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '105' 
 Execution Time:0.00021982192993164

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '106'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0007169246673584

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '106' 
 Execution Time:0.00024795532226562

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '107'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00060009956359863

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '107' 
 Execution Time:0.0002131462097168

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '108'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0006110668182373

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '108' 
 Execution Time:0.0002138614654541

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '109'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053501129150391

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '109' 
 Execution Time:0.0002129077911377

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '110'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00087404251098633

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '110' 
 Execution Time:0.00023794174194336

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '111'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0005490779876709

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '111' 
 Execution Time:0.00021600723266602

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '112'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00064516067504883

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '112' 
 Execution Time:0.00027203559875488

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '113'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00059199333190918

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '113' 
 Execution Time:0.00022792816162109

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '114'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00056290626525879

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '114' 
 Execution Time:0.00021886825561523

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '115'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053596496582031

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '115' 
 Execution Time:0.00023603439331055

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '116'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053811073303223

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '116' 
 Execution Time:0.00021886825561523

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '117'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053501129150391

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '117' 
 Execution Time:0.00029897689819336

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '118'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00055813789367676

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '118' 
 Execution Time:0.00022387504577637

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '119'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00065302848815918

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '119' 
 Execution Time:0.00021815299987793

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '120'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053882598876953

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '120' 
 Execution Time:0.00022292137145996

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '121'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0007779598236084

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '121' 
 Execution Time:0.00021982192993164

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '122'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053191184997559

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '122' 
 Execution Time:0.00025486946105957

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '123'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0006558895111084

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '123' 
 Execution Time:0.00022196769714355

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '124'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00058698654174805

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '124' 
 Execution Time:0.00022196769714355

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '125'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00068998336791992

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '125' 
 Execution Time:0.00025296211242676

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '126'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00059795379638672

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '126' 
 Execution Time:0.00022697448730469

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '127'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00056791305541992

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '127' 
 Execution Time:0.00026321411132812

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '128'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00054717063903809

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '128' 
 Execution Time:0.00024104118347168

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '129'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053882598876953

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '129' 
 Execution Time:0.00022101402282715

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '130'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053715705871582

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '130' 
 Execution Time:0.00022101402282715

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '131'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057482719421387

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '131' 
 Execution Time:0.00021696090698242

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '132'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00053787231445312

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '132' 
 Execution Time:0.00022602081298828

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '133'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00054502487182617

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '133' 
 Execution Time:0.00021600723266602

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '134'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00063204765319824

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '134' 
 Execution Time:0.00026702880859375

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '135'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00060200691223145

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '135' 
 Execution Time:0.00021791458129883

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '136'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00058507919311523

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '136' 
 Execution Time:0.00022697448730469

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '137'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00067591667175293

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '137' 
 Execution Time:0.00022196769714355

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '138'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00058889389038086

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '138' 
 Execution Time:0.00022101402282715

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '139'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00059008598327637

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '139' 
 Execution Time:0.00022315979003906

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '140'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00063109397888184

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '140' 
 Execution Time:0.00025296211242676

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '141'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057387351989746

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '141' 
 Execution Time:0.00027585029602051

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '142'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00061583518981934

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '142' 
 Execution Time:0.00021815299987793

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '143'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00054788589477539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '143' 
 Execution Time:0.00022315979003906

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '144'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00058889389038086

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '144' 
 Execution Time:0.00023078918457031

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '145'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00059890747070312

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '145' 
 Execution Time:0.00023698806762695

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '146'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0005497932434082

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '146' 
 Execution Time:0.00024104118347168

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '147'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00059604644775391

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '147' 
 Execution Time:0.00025701522827148

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '148'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00060105323791504

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '148' 
 Execution Time:0.00022697448730469

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '149'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00066804885864258

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '149' 
 Execution Time:0.00030303001403809

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '150'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00058412551879883

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '150' 
 Execution Time:0.00025606155395508

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '151'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00067901611328125

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '151' 
 Execution Time:0.00024986267089844

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '152'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0006411075592041

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '152' 
 Execution Time:0.00028300285339355

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '153'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057101249694824

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '153' 
 Execution Time:0.00023198127746582

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '154'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00087904930114746

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '154' 
 Execution Time:0.00030612945556641

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '155'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0008091926574707

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '155' 
 Execution Time:0.00032305717468262

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '156'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00074100494384766

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '156' 
 Execution Time:0.00030112266540527

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '157'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00060415267944336

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '157' 
 Execution Time:0.00031614303588867

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '158'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00077390670776367

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '158' 
 Execution Time:0.00035881996154785

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '159'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00078415870666504

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '159' 
 Execution Time:0.00030612945556641

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '160'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00075292587280273

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '160' 
 Execution Time:0.00024008750915527

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '161'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00065898895263672

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '161' 
 Execution Time:0.00026416778564453

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '162'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00074291229248047

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '162' 
 Execution Time:0.00022697448730469

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '163'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00066280364990234

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '163' 
 Execution Time:0.00022792816162109

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '164'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00066900253295898

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '164' 
 Execution Time:0.00022292137145996

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '165'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00085997581481934

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '165' 
 Execution Time:0.00023508071899414

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '166'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00058698654174805

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '166' 
 Execution Time:0.00022411346435547

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '167'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00055909156799316

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '167' 
 Execution Time:0.00024700164794922

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '168'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00064992904663086

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '168' 
 Execution Time:0.00024700164794922

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '169'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00058102607727051

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '169' 
 Execution Time:0.00022697448730469

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '170'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00062084197998047

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '170' 
 Execution Time:0.0002291202545166

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '171'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00056910514831543

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '171' 
 Execution Time:0.00028610229492188

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '172'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057792663574219

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '172' 
 Execution Time:0.000244140625

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '173'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00082993507385254

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '173' 
 Execution Time:0.00025320053100586

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '174'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00066995620727539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '174' 
 Execution Time:0.00027298927307129

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '175'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00062203407287598

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '175' 
 Execution Time:0.00062680244445801

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '176'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00065112113952637

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '176' 
 Execution Time:0.00022196769714355

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '177'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00073909759521484

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '177' 
 Execution Time:0.00025796890258789

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '178'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057578086853027

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '178' 
 Execution Time:0.00022006034851074

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '179'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00061202049255371

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '179' 
 Execution Time:0.00021791458129883

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '180'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00069308280944824

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '180' 
 Execution Time:0.00022006034851074

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '181'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00062394142150879

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '181' 
 Execution Time:0.00022101402282715

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '182'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00064897537231445

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '182' 
 Execution Time:0.00022006034851074

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '183'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00065302848815918

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '183' 
 Execution Time:0.00023508071899414

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '184'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00063800811767578

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '184' 
 Execution Time:0.0002288818359375

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '185'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00065779685974121

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '185' 
 Execution Time:0.00024199485778809

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '186'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057387351989746

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '186' 
 Execution Time:0.00022196769714355

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '187'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00067496299743652

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '187' 
 Execution Time:0.00026106834411621

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '188'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00066208839416504

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '188' 
 Execution Time:0.00023698806762695

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '189'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0006258487701416

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '189' 
 Execution Time:0.00023698806762695

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '190'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057506561279297

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '190' 
 Execution Time:0.00024199485778809

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '191'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00077605247497559

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '191' 
 Execution Time:0.00025010108947754

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '192'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057101249694824

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '192' 
 Execution Time:0.00022101402282715

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '193'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00066399574279785

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '193' 
 Execution Time:0.00022101402282715

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '194'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00058579444885254

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '194' 
 Execution Time:0.00022602081298828

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '195'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00060200691223145

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '195' 
 Execution Time:0.00021910667419434

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '196'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00056695938110352

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '196' 
 Execution Time:0.00021600723266602

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '197'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00066995620727539

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '197' 
 Execution Time:0.00027799606323242

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '198'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00059294700622559

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '198' 
 Execution Time:0.00021886825561523

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '200'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00076699256896973

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '200' 
 Execution Time:0.00026416778564453

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '201'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00059103965759277

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '201' 
 Execution Time:0.0002598762512207

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '202'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00066208839416504

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '202' 
 Execution Time:0.00024986267089844

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '203'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00059008598327637

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '203' 
 Execution Time:0.00022101402282715

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '204'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00060701370239258

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '204' 
 Execution Time:0.00022506713867188

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '205'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00066184997558594

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '205' 
 Execution Time:0.00024604797363281

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '206'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00065183639526367

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '206' 
 Execution Time:0.00023198127746582

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '207'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057220458984375

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '207' 
 Execution Time:0.0002291202545166

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '208'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00065398216247559

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '208' 
 Execution Time:0.00010108947753906

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '209'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057196617126465

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '209' 
 Execution Time:0.00011396408081055

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '210'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0006718635559082

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '210' 
 Execution Time:0.00010013580322266

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '211'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00067281723022461

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '211' 
 Execution Time:9.9897384643555E-5

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '199'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00069212913513184

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '199' 
 Execution Time:0.00022506713867188

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '212'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057792663574219

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '212' 
 Execution Time:0.00022006034851074

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '213'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00069594383239746

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '213' 
 Execution Time:0.00022292137145996

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '215'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00069808959960938

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '215' 
 Execution Time:0.00022387504577637

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '216'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00060701370239258

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '216' 
 Execution Time:0.00022602081298828

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '218'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00057101249694824

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '218' 
 Execution Time:0.00022006034851074

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '219'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00067996978759766

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '219' 
 Execution Time:0.00022602081298828

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '220'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00058293342590332

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '220' 
 Execution Time:0.00024080276489258

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '221'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00068283081054688

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '221' 
 Execution Time:0.0002751350402832

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '222'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00062799453735352

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '222' 
 Execution Time:0.00025296211242676

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '223'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00063395500183105

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '223' 
 Execution Time:0.00022315979003906

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '224'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00062680244445801

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '224' 
 Execution Time:0.00024294853210449

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '225'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.0006561279296875

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '225' 
 Execution Time:0.00025606155395508

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '226'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00069093704223633

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '226' 
 Execution Time:0.00022578239440918

SELECT MAX(name) AS name, MAX(category) AS category, MAX(quantity_purchased) AS quantity_purchased, MAX(item_location) AS item_location, MAX(item_number) AS item_number, MAX(description) AS description, MAX(subtotal) AS subtotal, MAX(tax) AS tax, MAX(total) AS total, MAX(cost) AS cost, MAX(profit) AS profit, MAX(discount) AS discount, MAX(discount_type) AS discount_type, MAX(sale_status) AS sale_status, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_sales_items_temp`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `ospos_sales_items_temp`.`item_id` AND `ospos_attribute_links`.`sale_id` = `ospos_sales_items_temp`.`sale_id` AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `ospos_sales_items_temp`.`sale_id` = '227'
GROUP BY `ospos_sales_items_temp`.`sale_id`, `ospos_sales_items_temp`.`item_id` 
 Execution Time:0.00063085556030273

SELECT `used`, `earned`
FROM `ospos_sales_reward_points`
WHERE `sale_id` = '227' 
 Execution Time:0.00026798248291016

SELECT *
FROM `ospos_stock_locations`
WHERE `deleted` = 0 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012111663818359

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00013589859008789

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012588500976562

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010991096496582

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00013589859008789

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010991096496582

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001068115234375

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001068115234375

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010991096496582

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010490417480469

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010919570922852

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011777877807617

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00013613700866699

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '2' 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00028109550476074

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012397766113281

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012993812561035

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00013089179992676

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010490417480469

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00013208389282227

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011301040649414

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001068115234375

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010991096496582

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011897087097168

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011587142944336

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011014938354492

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011587142944336

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001068115234375

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012016296386719

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012397766113281

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011014938354492

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00013494491577148

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012111663818359

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00016212463378906

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011682510375977

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011086463928223

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012111663818359

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001068115234375

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010514259338379

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010299682617188

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011897087097168

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012493133544922

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00013303756713867

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011992454528809

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010418891906738

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010418891906738

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001220703125

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011181831359863

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011610984802246

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00016617774963379

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011014938354492

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001378059387207

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011277198791504

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011301040649414

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011086463928223

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012803077697754

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011396408081055

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011992454528809

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012612342834473

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012516975402832

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001068115234375

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010490417480469

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010514259338379

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012016296386719

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012707710266113

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001380443572998

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001068115234375

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011706352233887

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011610984802246

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001220703125

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010919570922852

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011110305786133

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012421607971191

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012516975402832

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012397766113281

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014090538024902

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011706352233887

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011396408081055

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011706352233887

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011706352233887

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011682510375977

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012493133544922

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010919570922852

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010514259338379

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011610984802246

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011491775512695

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011897087097168

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011897087097168

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011396408081055

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001068115234375

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012993812561035

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001521110534668

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010585784912109

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011086463928223

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001060962677002

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010800361633301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011897087097168

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00013589859008789

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001368522644043

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00013208389282227

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012087821960449

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '2' 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014090538024902

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014019012451172

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011420249938965

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010395050048828

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012087821960449

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014019012451172

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001068115234375

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00012397766113281

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00010895729064941

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011801719665527

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.0001070499420166

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011205673217773

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00011396408081055

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '2' 
 Execution Time:0.00012111663818359

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '2' 
 Execution Time:0.00010800361633301

SELECT SUM(subtotal) AS subtotal, SUM(tax) AS tax, SUM(total) AS total, SUM(cost) AS cost, SUM(profit) AS profit
FROM `ospos_sales_items_temp`
WHERE `sale_status` = 0
AND   (
`sale_type` = 0
OR `sale_type` = 1
OR `sale_type` = 4
 ) 
 Execution Time:0.0010209083557129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018811225891113

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017094612121582

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0015528202056885

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.00021004676818848

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017631053924561

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027704238891602

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'suppliers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014781951904297

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'suppliers!_%' ESCAPE '!' 
 Execution Time:0.00014615058898926

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019097328186035

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066304206848145

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001680850982666

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034213066101074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028181076049805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022387504577637

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022697448730469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024294853210449

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'messages'
 LIMIT 1 
 Execution Time:0.00015401840209961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001978874206543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.000244140625

SELECT 1
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0015900135040283

SELECT GET_LOCK('4b90274818cae7384a5a79e54880381b', 300) AS ci_session_lock 
 Execution Time:0.00023508071899414

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mof2gc06h98ccdiuett1n8siislpjjb2'
AND `ip_address` = '186.156.29.79' 
 Execution Time:0.0017850399017334

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022101402282715

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'suppliers%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00014615058898926

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'suppliers!_%' ESCAPE '!' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018501281738281

SHOW TABLES FROM `ospos` 
 Execution Time:0.0006251335144043

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020313262939453

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023698806762695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028800964355469

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024080276489258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024914741516113

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_suppliers` AS `suppliers`
JOIN `ospos_people` ON `suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  `agency_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0
 LIMIT 25 
 Execution Time:0.00019478797912598

SELECT COUNT(suppliers.person_id) as count
FROM `ospos_suppliers` AS `suppliers`
JOIN `ospos_people` ON `suppliers`.`person_id` = `ospos_people`.`person_id`
WHERE   (
`first_name` LIKE '%%' ESCAPE '!'
OR  `last_name` LIKE '%%' ESCAPE '!'
OR  `company_name` LIKE '%%' ESCAPE '!'
OR  `agency_name` LIKE '%%' ESCAPE '!'
OR  `email` LIKE '%%' ESCAPE '!'
OR  `phone_number` LIKE '%%' ESCAPE '!'
OR  `account_number` LIKE '%%' ESCAPE '!'
OR  CONCAT(first_name, " ", last_name) LIKE '%%' ESCAPE '!'
 )
AND `deleted` = 0 
 Execution Time:0.00013995170593262

SELECT GET_LOCK('bea593c9ecc6eea64ab00a6a7f6b7cf0', 300) AS ci_session_lock 
 Execution Time:0.00023698806762695

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ps3gn15h59ihn9gqtau36g82pdvbv4mb'
AND `ip_address` = '139.162.119.197' 
 Execution Time:0.0018458366394043

SHOW TABLES FROM `ospos` 
 Execution Time:0.00064492225646973

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00039505958557129

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021696090698242

SELECT GET_LOCK('61d46da30a9a5e94fde1724db0861862', 300) AS ci_session_lock 
 Execution Time:0.0002739429473877

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'ctsd5cgloi8lo5qllbvvdtsk1p0ugdqr'
AND `ip_address` = '193.118.53.210' 
 Execution Time:0.0021140575408936

SHOW TABLES FROM `ospos` 
 Execution Time:0.0007328987121582

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014901161193848

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030207633972168

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020503997802734

SELECT GET_LOCK('758febd1a327bc90aafb0216eaf2545f', 300) AS ci_session_lock 
 Execution Time:0.00034689903259277

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'vdpdcault7p3oktfi7ceeklr6ic22pik'
AND `ip_address` = '192.241.223.168' 
 Execution Time:0.0031948089599609

SHOW TABLES FROM `ospos` 
 Execution Time:0.0010578632354736

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00019311904907227

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0004119873046875

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00026917457580566

SELECT GET_LOCK('edf444987e34f0a9987216b445b43ccb', 300) AS ci_session_lock 
 Execution Time:0.00032496452331543

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9ipinm9129otur6gb6ooin38t47116eh'
AND `ip_address` = '185.173.35.5' 
 Execution Time:0.0028021335601807

SHOW TABLES FROM `ospos` 
 Execution Time:0.00097298622131348

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023198127746582

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00052094459533691

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00046801567077637

SELECT GET_LOCK('8cb23e4d765a99e8a284ea0f6bf80004', 300) AS ci_session_lock 
 Execution Time:0.00024509429931641

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'b2rapfnckm3j1kr9sec2o4nrati1rf9e'
AND `ip_address` = '192.241.223.178' 
 Execution Time:0.0020649433135986

SHOW TABLES FROM `ospos` 
 Execution Time:0.001366138458252

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023293495178223

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00037097930908203

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00031900405883789

SELECT GET_LOCK('6fcd84c709ea413780cfe9b7e819fd6c', 300) AS ci_session_lock 
 Execution Time:0.00026607513427734

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'i3atpg9ifdnqujfggtcoqa71t4kq27ba'
AND `ip_address` = '216.218.206.66' 
 Execution Time:0.0019659996032715

SHOW TABLES FROM `ospos` 
 Execution Time:0.0006861686706543

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00027298927307129

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003960132598877

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00033092498779297

SELECT GET_LOCK('805dc08dcc1ff929f82f1b5f3985235a', 300) AS ci_session_lock 
 Execution Time:0.00026512145996094

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'n2o5ldrhbdrvm7n17ghgqshpfdjg4fah'
AND `ip_address` = '34.96.130.21' 
 Execution Time:0.0022749900817871

SHOW TABLES FROM `ospos` 
 Execution Time:0.00065302848815918

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017619132995605

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003669261932373

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021696090698242

SELECT GET_LOCK('c3ebc94eebdd8fd280a5ddfe1e3c2eaf', 300) AS ci_session_lock 
 Execution Time:0.00023818016052246

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '9o8saul9de9jv2iroggn09dd80sa74ej'
AND `ip_address` = '162.142.125.54' 
 Execution Time:0.0018630027770996

SHOW TABLES FROM `ospos` 
 Execution Time:0.00075197219848633

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00034213066101074

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023913383483887

SELECT GET_LOCK('0e5bbc36c9dde922227d78828ba3262f', 300) AS ci_session_lock 
 Execution Time:0.00029397010803223

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'fngopmfg0kvr0bsg9tfd65g5oaht6qnd'
AND `ip_address` = '162.142.125.54' 
 Execution Time:0.0026719570159912

SHOW TABLES FROM `ospos` 
 Execution Time:0.00068902969360352

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031399726867676

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00024914741516113

SELECT GET_LOCK('7c67af2d426fb89283213f4b67182fd0', 300) AS ci_session_lock 
 Execution Time:0.00017404556274414

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'gnkc0qe1odhk5u5ohnkgobbq6jcjtl58'
AND `ip_address` = '45.155.205.108' 
 Execution Time:0.0012481212615967

SHOW TABLES FROM `ospos` 
 Execution Time:0.0004270076751709

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:9.7036361694336E-5

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00024604797363281

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017404556274414

SELECT GET_LOCK('8114ce0dcc58c329babffe02103d8316', 300) AS ci_session_lock 
 Execution Time:0.00024104118347168

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '7pbu5tccnapoqup000flsndcv3m1c459'
AND `ip_address` = '45.155.205.108' 
 Execution Time:0.0021350383758545

SHOW TABLES FROM `ospos` 
 Execution Time:0.00087404251098633

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00025415420532227

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029921531677246

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022006034851074

SELECT GET_LOCK('3b8de9ffe72fed8be1c3e9c856e4feed', 300) AS ci_session_lock 
 Execution Time:0.00023198127746582

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '2vrou6r6nlu17lam38cursbq8ppc4vaf'
AND `ip_address` = '45.155.205.108' 
 Execution Time:0.0016369819641113

SHOW TABLES FROM `ospos` 
 Execution Time:0.00057005882263184

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014400482177734

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00024294853210449

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022792816162109

SELECT GET_LOCK('a5e371f4b17b62b34999cf4c8df3bf7b', 300) AS ci_session_lock 
 Execution Time:0.00019097328186035

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '66l9pjs7mtubfplnib8tii05kfjvc0mj'
AND `ip_address` = '62.133.174.29' 
 Execution Time:0.0019030570983887

SHOW TABLES FROM `ospos` 
 Execution Time:0.00053811073303223

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001220703125

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0002288818359375

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00019216537475586

SELECT GET_LOCK('7a217222fd4505d6b22fe9f3857ee0f1', 300) AS ci_session_lock 
 Execution Time:0.00037193298339844

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5vircr0a35v126lbs9f4mtkocedrjvjj'
AND `ip_address` = '34.96.130.58' 
 Execution Time:0.0019550323486328

SHOW TABLES FROM `ospos` 
 Execution Time:0.00069403648376465

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001680850982666

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00037312507629395

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00024604797363281

SELECT GET_LOCK('acb6906822ffbdd99003f6e92782ad5f', 300) AS ci_session_lock 
 Execution Time:0.00027084350585938

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'g3au0ej6vujd11a0u7oa2pj7nggbe2pl'
AND `ip_address` = '5.182.173.11' 
 Execution Time:0.0019619464874268

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070095062255859

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00035715103149414

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002589225769043

SELECT GET_LOCK('2a3d4c3d3addc05589cfebdc9152c069', 300) AS ci_session_lock 
 Execution Time:0.00036096572875977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '461he8l07lb9sq4rg937hbkahj27qi54'
AND `ip_address` = '206.81.12.65' 
 Execution Time:0.0021018981933594

SHOW TABLES FROM `ospos` 
 Execution Time:0.00071907043457031

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016403198242188

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029611587524414

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002589225769043

SELECT GET_LOCK('5a37d0852d2460be919055a771094e52', 300) AS ci_session_lock 
 Execution Time:0.00023698806762695

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '3kod4nlm5s4303brjalbm6k0edqlishe'
AND `ip_address` = '89.241.226.238' 
 Execution Time:0.0025479793548584

SHOW TABLES FROM `ospos` 
 Execution Time:0.0008540153503418

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015497207641602

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00042986869812012

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022697448730469

SELECT GET_LOCK('41d523dd2153f90999f43ec73572d7ca', 300) AS ci_session_lock 
 Execution Time:0.00054311752319336

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '8sgdi6u2t430fr53jbsj61nmme74fffb'
AND `ip_address` = '185.173.35.17' 
 Execution Time:0.0041141510009766

SHOW TABLES FROM `ospos` 
 Execution Time:0.0013630390167236

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00033903121948242

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00070881843566895

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023388862609863

SELECT GET_LOCK('2d3f82e77a31e9547dc80fbd16bef6c9', 300) AS ci_session_lock 
 Execution Time:0.00024795532226562

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'bbgvefqbv7eshhgt2lnihm0j2n73c8g4'
AND `ip_address` = '223.72.104.24' 
 Execution Time:0.0021390914916992

SHOW TABLES FROM `ospos` 
 Execution Time:0.00078606605529785

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014615058898926

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00036406517028809

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021886825561523

SELECT GET_LOCK('a6ced0b882a33396e0dcb97d1f182d58', 300) AS ci_session_lock 
 Execution Time:0.00028800964355469

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'mp7e1qfpkpejimf7g8pu271gc8v4vldb'
AND `ip_address` = '117.252.64.126' 
 Execution Time:0.0021669864654541

SHOW TABLES FROM `ospos` 
 Execution Time:0.00069308280944824

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018596649169922

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031185150146484

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00030303001403809

SELECT GET_LOCK('c17b80d0806fac9a908cfcd149be286b', 300) AS ci_session_lock 
 Execution Time:0.00031900405883789

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '5645fn9rrbk71tqc9lpmp3d9bqmgtr1q'
AND `ip_address` = '213.55.77.143' 
 Execution Time:0.0021600723266602

SHOW TABLES FROM `ospos` 
 Execution Time:0.00085783004760742

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022482872009277

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029802322387695

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023603439331055

SELECT GET_LOCK('b6cf871c9bc03620fb6af9866446e4fc', 300) AS ci_session_lock 
 Execution Time:0.0002751350402832

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'enkkgdcmvtqruo5v21blmmg5stmlu4m6'
AND `ip_address` = '162.142.125.54' 
 Execution Time:0.0020718574523926

SHOW TABLES FROM `ospos` 
 Execution Time:0.0006868839263916

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022792816162109

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031495094299316

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00024580955505371

SELECT GET_LOCK('3e39ced4a98c81eec8e6cc4927883946', 300) AS ci_session_lock 
 Execution Time:0.00026798248291016

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'pdqohuon84fuvqu5e9ehq7ki02gupdqm'
AND `ip_address` = '162.142.125.54' 
 Execution Time:0.0019509792327881

SHOW TABLES FROM `ospos` 
 Execution Time:0.00064587593078613

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00017786026000977

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00038790702819824

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023603439331055

SELECT GET_LOCK('8ce926fa5bd06dfe3676ba7217419756', 300) AS ci_session_lock 
 Execution Time:0.00029993057250977

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'nl11gcnc5hila2ee68ekv7n9i83tjm4d'
AND `ip_address` = '34.86.35.17' 
 Execution Time:0.002701997756958

SHOW TABLES FROM `ospos` 
 Execution Time:0.0010511875152588

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00020599365234375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.0003049373626709

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00028586387634277

SELECT GET_LOCK('5437c2b6e59b170aac85f27813a294af', 300) AS ci_session_lock 
 Execution Time:0.00027179718017578

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'r63v1358mcp6ieg87pd6o45vepsuh149'
AND `ip_address` = '45.155.205.108' 
 Execution Time:0.0021171569824219

SHOW TABLES FROM `ospos` 
 Execution Time:0.00068807601928711

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015711784362793

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00031208992004395

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00026416778564453

SELECT GET_LOCK('ffeb5938063f0eb60c441f1a90be2d01', 300) AS ci_session_lock 
 Execution Time:0.00032305717468262

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'c0ri72opnh5olptcs4f3ckg31sc87v2k'
AND `ip_address` = '45.155.205.108' 
 Execution Time:0.002251148223877

SHOW TABLES FROM `ospos` 
 Execution Time:0.00083518028259277

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00034308433532715

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030303001403809

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00029897689819336

SELECT GET_LOCK('6c252639ebb305e207d69345b25b484f', 300) AS ci_session_lock 
 Execution Time:0.00018310546875

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'evfmk3n3so8o1u49g3b7g56bot9sgqiq'
AND `ip_address` = '45.153.203.35' 
 Execution Time:0.0014369487762451

SHOW TABLES FROM `ospos` 
 Execution Time:0.00065398216247559

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00012087821960449

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029301643371582

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018715858459473

SELECT GET_LOCK('0f31ec530f00e016dd4877e851c954a9', 300) AS ci_session_lock 
 Execution Time:0.00026893615722656

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'd0sm3f3rcno7392hgqerjvve31797l7q'
AND `ip_address` = '128.14.209.250' 
 Execution Time:0.0021569728851318

SHOW TABLES FROM `ospos` 
 Execution Time:0.00072097778320312

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029492378234863

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023102760314941

SELECT GET_LOCK('4744c29f2c99c11743c0f7a7520e5b4f', 300) AS ci_session_lock 
 Execution Time:0.00033712387084961

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'n78ntnogm232sm5pb9et0febroq4nom4'
AND `ip_address` = '162.218.65.10' 
 Execution Time:0.0030510425567627

SHOW TABLES FROM `ospos` 
 Execution Time:0.00088381767272949

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018191337585449

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00039196014404297

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022006034851074

SELECT GET_LOCK('6354a14be287f5838db381e9e93381ce', 300) AS ci_session_lock 
 Execution Time:0.00025391578674316

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'k52kshiu2gphdl21l7hu14n9lt9iubut'
AND `ip_address` = '184.105.247.195' 
 Execution Time:0.0020718574523926

SHOW TABLES FROM `ospos` 
 Execution Time:0.00060582160949707

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001838207244873

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029706954956055

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00022196769714355

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0019009113311768

SELECT GET_LOCK('51acf8e1029f93faa73ba556133dab7a', 300) AS ci_session_lock 
 Execution Time:0.0002291202545166

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0019900798797607

SHOW TABLES FROM `ospos` 
 Execution Time:0.00074195861816406

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00023913383483887

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030994415283203

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00025510787963867

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.002269983291626

SELECT GET_LOCK('51acf8e1029f93faa73ba556133dab7a', 300) AS ci_session_lock 
 Execution Time:0.00026917457580566

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0026519298553467

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022387504577637

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE '%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00022482872009277

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00028109550476074

SHOW TABLES FROM `ospos` 
 Execution Time:0.00080299377441406

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002129077911377

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00033187866210938

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00042009353637695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018906593322754

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017619132995605

SELECT GET_LOCK('51acf8e1029f93faa73ba556133dab7a', 300) AS ci_session_lock 
 Execution Time:0.00028109550476074

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0021212100982666

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00035309791564941

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00029492378234863

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023603439331055

SHOW TABLES FROM `ospos` 
 Execution Time:0.00070285797119141

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023412704467773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028014183044434

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017595291137695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00059890747070312

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0
 LIMIT 1 
 Execution Time:0.00017118453979492

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'items%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00016498565673828

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018596649169922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023794174194336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017595291137695

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0016660690307617

SELECT GET_LOCK('51acf8e1029f93faa73ba556133dab7a', 300) AS ci_session_lock 
 Execution Time:0.00025200843811035

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017640590667725

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020480155944824

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015902519226074

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
 Execution Time:0.00080394744873047

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00021100044250488

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00025296211242676

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028300285339355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018811225891113

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00018787384033203

SELECT MAX(items.item_id) AS item_id, MAX(items.name) AS name, MAX(items.category) AS category, MAX(items.supplier_id) AS supplier_id, MAX(items.item_number) AS item_number, MAX(items.description) AS description, MAX(items.cost_price) AS cost_price, MAX(items.unit_price) AS unit_price, MAX(items.reorder_level) AS reorder_level, MAX(items.receiving_quantity) AS receiving_quantity, MAX(items.pic_filename) AS pic_filename, MAX(items.allow_alt_description) AS allow_alt_description, MAX(items.is_serialized) AS is_serialized, MAX(items.pack_name) AS pack_name, MAX(items.tax_category_id) AS tax_category_id, MAX(items.deleted) AS deleted, MAX(suppliers.person_id) AS person_id, MAX(suppliers.company_name) AS company_name, MAX(suppliers.agency_name) AS agency_name, MAX(suppliers.account_number) AS account_number, MAX(suppliers.deleted) AS deleted, MAX(inventory.trans_id) AS trans_id, MAX(inventory.trans_items) AS trans_items, MAX(inventory.trans_user) AS trans_user, MAX(inventory.trans_date) AS trans_date, MAX(inventory.trans_comment) AS trans_comment, MAX(inventory.trans_location) AS trans_location, MAX(inventory.trans_inventory) AS trans_inventory, MAX(item_quantities.item_id) AS qty_item_id, MAX(item_quantities.location_id) AS location_id, MAX(item_quantities.quantity) AS quantity, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_items` AS `items`
LEFT JOIN `ospos_suppliers` AS `suppliers` ON `suppliers`.`person_id` = `items`.`supplier_id`
JOIN `ospos_inventory` AS `inventory` ON `inventory`.`trans_items` = `items`.`item_id`
JOIN `ospos_item_quantities` AS `item_quantities` ON `item_quantities`.`item_id` = `items`.`item_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `items`.`item_id` AND `ospos_attribute_links`.`receiving_id` IS NULL AND `ospos_attribute_links`.`sale_id` IS NULL AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `location_id` = '1'
AND DATE_FORMAT(trans_date, "%Y-%m-%d") BETWEEN '2010-01-01' AND '2021-02-20'
AND `items`.`deleted` = 0
AND `items`.`item_type` IN(0, 1, 2)
GROUP BY `items`.`item_id`
 LIMIT 25 
 Execution Time:0.015487909317017

SELECT COUNT(DISTINCT items.item_id) AS count, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_value) ORDER BY definition_id SEPARATOR '|') AS attribute_values, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, DATE_FORMAT(attribute_date, '%d/%m/%Y')) SEPARATOR '|') AS attribute_dtvalues, GROUP_CONCAT(DISTINCT CONCAT_WS('_', `definition_id`, attribute_decimal) SEPARATOR '|') AS attribute_dvalues
FROM `ospos_items` AS `items`
LEFT JOIN `ospos_suppliers` AS `suppliers` ON `suppliers`.`person_id` = `items`.`supplier_id`
JOIN `ospos_inventory` AS `inventory` ON `inventory`.`trans_items` = `items`.`item_id`
JOIN `ospos_item_quantities` AS `item_quantities` ON `item_quantities`.`item_id` = `items`.`item_id`
LEFT JOIN `ospos_attribute_links` ON `ospos_attribute_links`.`item_id` = `items`.`item_id` AND `ospos_attribute_links`.`receiving_id` IS NULL AND `ospos_attribute_links`.`sale_id` IS NULL AND `definition_id` IN (1,2,3,4,5,6,7)
LEFT JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
WHERE `location_id` = '1'
AND DATE_FORMAT(trans_date, "%Y-%m-%d") BETWEEN '2010-01-01' AND '2021-02-20'
AND `items`.`deleted` = 0
AND `items`.`item_type` IN(0, 1, 2) 
 Execution Time:0.0058801174163818

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00024700164794922

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00063419342041016

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '3' 
 Execution Time:0.00021100044250488

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00022792816162109

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '4' 
 Execution Time:0.00016283988952637

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00022292137145996

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '5' 
 Execution Time:0.00016403198242188

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '6' 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '7' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '8' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00018882751464844

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '9' 
 Execution Time:0.00022411346435547

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '13' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '14' 
 Execution Time:0.00015807151794434

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020384788513184

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '15' 
 Execution Time:0.00016379356384277

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '16' 
 Execution Time:0.00016093254089355

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '35' 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.0001671314239502

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '57' 
 Execution Time:0.0001678466796875

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '63' 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00019311904907227

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '126' 
 Execution Time:0.00016283988952637

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00017189979553223

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '130' 
 Execution Time:0.00055694580078125

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016689300537109

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '159' 
 Execution Time:0.00016093254089355

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '181' 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.0002288818359375

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '193' 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '197' 
 Execution Time:0.00015807151794434

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00020194053649902

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '201' 
 Execution Time:0.00019097328186035

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00017285346984863

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '202' 
 Execution Time:0.00016307830810547

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00016617774963379

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '278' 
 Execution Time:0.00015616416931152

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '332' 
 Execution Time:0.00011610984802246

SELECT *
FROM `ospos_attribute_definitions`
WHERE definition_flags & 1
AND `deleted` = 0
AND `definition_type` <> 'GROUP'
ORDER BY `definition_id` 
 Execution Time:0.00012087821960449

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.00017690658569336

SELECT GET_LOCK('51acf8e1029f93faa73ba556133dab7a', 300) AS ci_session_lock 
 Execution Time:0.00025296211242676

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0001521110534668

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020313262939453

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0002751350402832

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00027990341186523

SHOW TABLES FROM `ospos` 
 Execution Time:0.0011129379272461

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0002131462097168

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00039196014404297

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00032210350036621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019001960754395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021505355834961

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021195411682129

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.00023293495178223

SELECT GET_LOCK('51acf8e1029f93faa73ba556133dab7a', 300) AS ci_session_lock 
 Execution Time:0.0003209114074707

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.00022006034851074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028705596923828

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00016403198242188

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001981258392334

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066399574279785

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015592575073242

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026082992553711

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026392936706543

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002291202545166

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00030517578125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024008750915527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020289421081543

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017049312591553

SELECT GET_LOCK('51acf8e1029f93faa73ba556133dab7a', 300) AS ci_session_lock 
 Execution Time:0.00026297569274902

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0023059844970703

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020599365234375

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00023579597473145

SHOW TABLES FROM `ospos` 
 Execution Time:0.0009160041809082

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00018692016601562

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00033998489379883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00034284591674805

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019502639770508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019693374633789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019001960754395

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019693374633789

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017948150634766

SELECT GET_LOCK('51acf8e1029f93faa73ba556133dab7a', 300) AS ci_session_lock 
 Execution Time:0.00025415420532227

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0019309520721436

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020098686218262

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'items%' ESCAPE '!'
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
 Execution Time:0.00020694732666016

SHOW TABLES FROM `ospos` 
 Execution Time:0.00072598457336426

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015592575073242

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00025677680969238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00031709671020508

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019383430480957

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019407272338867

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021195411682129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00029420852661133

SELECT *
FROM `ospos_suppliers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_suppliers`.`person_id`
WHERE `ospos_suppliers`.`person_id` IS NULL 
 Execution Time:0.00053191184997559

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0019121170043945

SELECT GET_LOCK('51acf8e1029f93faa73ba556133dab7a', 300) AS ci_session_lock 
 Execution Time:0.0002140998840332

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0018820762634277

UPDATE `ospos_sessions` SET `timestamp` = 1613881110, `data` = '__ci_last_regenerate|i:1613881110;person_id|s:1:\"1\";menu_group|s:4:\"home\";allow_temp_items|i:0;item_location|s:1:\"1\";'
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0046401023864746

SELECT RELEASE_LOCK('51acf8e1029f93faa73ba556133dab7a') AS ci_session_lock 
 Execution Time:0.00023794174194336

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '37t8litfnn4n0nhd9qmdp37vrpsthj61'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0014820098876953

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.0002129077911377

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017249584197998

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020289421081543

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015687942504883

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001990795135498

SHOW TABLES FROM `ospos` 
 Execution Time:0.0009300708770752

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026607513427734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00035190582275391

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021886825561523

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023794174194336

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00016093254089355

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00019097328186035

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
 Execution Time:0.00019001960754395

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00018405914306641

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.001183032989502

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0009458065032959

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018310546875

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00018882751464844

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

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
 Execution Time:0.00022196769714355

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017790794372559

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.00026583671569824

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0018270015716553

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020790100097656

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015902519226074

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
 Execution Time:0.00060081481933594

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014185905456543

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00021910667419434

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002591609954834

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017213821411133

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016689300537109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022292137145996

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%890126201032021%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0039041042327881

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%890126201032021%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.0028529167175293

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%890126201032021%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00037908554077148

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017299652099609

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.00022602081298828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0019099712371826

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018978118896484

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
 Execution Time:0.00018596649169922

SHOW TABLES FROM `ospos` 
 Execution Time:0.00081992149353027

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023007392883301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027298927307129

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017809867858887

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '890126201032021'
OR `ospos_items`.`item_id` = 890126201032021
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.001101016998291

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00016188621520996

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00019598007202148

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00016283988952637

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0014188289642334

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010612010955811

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019001960754395

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00020694732666016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019383430480957

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.0002598762512207

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00018596649169922

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017731189727783

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.00021696090698242

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0019350051879883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018715858459473

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
 Execution Time:0.00020909309387207

SHOW TABLES FROM `ospos` 
 Execution Time:0.00087714195251465

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00030803680419922

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00027894973754883

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017213821411133

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018000602722168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022196769714355

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%890126201032021%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00024700164794922

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%890126201032021%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.0001521110534668

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%890126201032021%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00017094612121582

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0018928050994873

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.0002138614654541

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017709732055664

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022697448730469

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0001530647277832

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00017690658569336

SHOW TABLES FROM `ospos` 
 Execution Time:0.00063490867614746

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00022006034851074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026202201843262

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0001680850982666

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017690658569336

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%89012620103202%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0030579566955566

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%89012620103202%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.0027790069580078

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%89012620103202%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00036311149597168

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0019898414611816

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.00026106834411621

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017468929290771

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024199485778809

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00016522407531738

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0002138614654541

SHOW TABLES FROM `ospos` 
 Execution Time:0.00072216987609863

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.0001988410949707

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023293495178223

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0003058910369873

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019216537475586

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018692016601562

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%imp%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0033740997314453

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%imp%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.0026030540466309

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%imp%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00016403198242188

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0028598308563232

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.0003199577331543

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0028839111328125

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019192695617676

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0001978874206543

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00018501281738281

SHOW TABLES FROM `ospos` 
 Execution Time:0.00069093704223633

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014996528625488

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023198127746582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002589225769043

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018095970153809

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023794174194336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022101402282715

SELECT `item_id`, `name`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `name` LIKE '%impreso%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.0037469863891602

SELECT `item_id`, `item_number`, `pack_name`, `name`
FROM `ospos_items`
WHERE `deleted` = 0
AND `item_type` IN(0, 2)
AND  `item_number` LIKE '%impreso%' ESCAPE '!'
ORDER BY `item_number` ASC 
 Execution Time:0.002971887588501

SELECT *
FROM `ospos_item_kits`
WHERE `name` LIKE '%impreso%' ESCAPE '!'
ORDER BY `name` ASC 
 Execution Time:0.00019288063049316

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0019958019256592

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.00025701522827148

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.001964807510376

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018501281738281

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0002291202545166

SHOW TABLES FROM `ospos` 
 Execution Time:0.00066089630126953

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00026512145996094

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00028896331787109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017905235290527

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017499923706055

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00022792816162109

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018620491027832

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '2'
OR `ospos_items`.`item_id` = 2
 )
AND `ospos_items`.`deleted` = 0
 LIMIT 1 
 Execution Time:0.0008699893951416

SELECT GROUP_CONCAT(attribute_value SEPARATOR ', ') AS attribute_values, GROUP_CONCAT(DATE_FORMAT(attribute_date, '%d/%m/%Y') SEPARATOR ', ') AS attribute_dtvalues
FROM `ospos_attribute_links`
JOIN `ospos_attribute_values` ON `ospos_attribute_values`.`attribute_id` = `ospos_attribute_links`.`attribute_id`
JOIN `ospos_attribute_definitions` ON `ospos_attribute_definitions`.`definition_id` = `ospos_attribute_links`.`definition_id`
WHERE `definition_type` <> 'GROUP'
AND `deleted` = 0
AND `sale_id` IS NULL
AND `receiving_id` IS NULL
AND `item_id` = 2
AND definition_flags &  2 
 Execution Time:0.00067400932312012

SELECT *
FROM `ospos_stock_locations`
WHERE `location_id` = '1' 
 Execution Time:0.00014305114746094

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00032305717468262

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '2'
OR `ospos_items`.`item_id` = 2
 )
 LIMIT 1 
 Execution Time:0.00052309036254883

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.0001370906829834

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00014495849609375

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00021982192993164

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00034785270690918

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.0002140998840332

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00014781951904297

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0011379718780518

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0009760856628418

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00019693374633789

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00014615058898926

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020194053649902

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00024795532226562

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0018079280853271

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.0002291202545166

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017850399017334

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020980834960938

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
 Execution Time:0.00024199485778809

SHOW TABLES FROM `ospos` 
 Execution Time:0.0007319450378418

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00020599365234375

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00026607513427734

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017094612121582

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016617774963379

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016689300537109

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
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00019121170043945

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00015091896057129

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00021696090698242

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0012819766998291

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.0010149478912354

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00014591217041016

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017595291137695

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
 Execution Time:0.0002129077911377

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
 Execution Time:0.00018787384033203

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0016238689422607

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.00023698806762695

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0017609596252441

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'sales%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00016593933105469

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00016903877258301

SHOW TABLES FROM `ospos` 
 Execution Time:0.00065898895263672

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00013899803161621

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00018906593322754

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00036287307739258

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024104118347168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00023698806762695

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002281665802002

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00016999244689941

SELECT *
FROM `ospos_items`
WHERE   (
`ospos_items`.`item_number` = '2'
OR `ospos_items`.`item_id` = 2
 )
 LIMIT 1 
 Execution Time:0.00017881393432617

SELECT *
FROM `ospos_item_quantities`
WHERE `item_id` = '2'
AND `location_id` = '1' 
 Execution Time:0.00014090538024902

SELECT *
FROM `ospos_dinner_tables`
WHERE `status` = 0
OR `dinner_table_id` IS NULL
AND `deleted` = 0 
 Execution Time:0.00020098686218262

SELECT *
FROM `ospos_stock_locations`
JOIN `ospos_permissions` AS `permissions` ON `permissions`.`location_id` = `ospos_stock_locations`.`location_id`
JOIN `ospos_grants` AS `grants` ON `grants`.`permission_id` = `permissions`.`permission_id`
WHERE `person_id` = '1'
AND  `permissions`.`permission_id` LIKE 'sales%' ESCAPE '!'
AND `deleted` = 0 
 Execution Time:0.00020408630371094

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00017309188842773

SELECT *
FROM `ospos_customers`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_customers`.`person_id`
WHERE `ospos_customers`.`person_id` = -1 
 Execution Time:0.00020694732666016

SELECT *
FROM `ospos_people`
WHERE `person_id` = -1
 LIMIT 1 
 Execution Time:0.00018811225891113

SHOW COLUMNS FROM `ospos_people` 
 Execution Time:0.0016531944274902

SHOW COLUMNS FROM `ospos_customers` 
 Execution Time:0.001370906829834

SELECT *
FROM `ospos_items_taxes`
WHERE `item_id` = '2' 
 Execution Time:0.00017380714416504

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021910667419434

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'items'
 LIMIT 1 
 Execution Time:0.00016903877258301

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020003318786621

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'sales_change_price'
 LIMIT 1 
 Execution Time:0.00019311904907227

SELECT *
FROM `ospos_grants`
WHERE `person_id` = '1'
AND `permission_id` = 'reports_sales'
 LIMIT 1 
 Execution Time:0.00022006034851074

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0019278526306152

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.00022602081298828

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0020952224731445

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'cashups%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.00019693374633789

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'cashups!_%' ESCAPE '!' 
 Execution Time:0.00014209747314453

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.0001671314239502

SHOW TABLES FROM `ospos` 
 Execution Time:0.00067615509033203

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00015807151794434

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00023794174194336

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00024104118347168

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00018405914306641

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00015902519226074

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00015997886657715

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00019598007202148

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

SELECT 1
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0018181800842285

SELECT GET_LOCK('43c2feee02a8d9e91a9e3acfad7c1a9d', 300) AS ci_session_lock 
 Execution Time:0.00024199485778809

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = '6l87ikbjemmmd6hoo96h5e1akgrp9n8g'
AND `ip_address` = '200.74.89.145' 
 Execution Time:0.0018529891967773

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020098686218262

SELECT *
FROM `ospos_grants`
WHERE `permission_id` LIKE 'cashups%' ESCAPE '!'
AND `person_id` = '1' 
 Execution Time:0.0001680850982666

SELECT *
FROM `ospos_permissions`
WHERE `permission_id` LIKE 'cashups!_%' ESCAPE '!' 
 Execution Time:0.00017189979553223

SELECT *
FROM `ospos_modules`
JOIN `ospos_permissions` ON `ospos_permissions`.`permission_id` = `ospos_modules`.`module_id`
JOIN `ospos_grants` ON `ospos_permissions`.`permission_id` = `ospos_grants`.`permission_id`
WHERE `person_id` = '1'
AND `menu_group` IN('home', 'both')
AND `sort` != 0
ORDER BY `sort` ASC 
 Execution Time:0.00019097328186035

SHOW TABLES FROM `ospos` 
 Execution Time:0.00081706047058105

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00014805793762207

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00020813941955566

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00043988227844238

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.0002439022064209

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00020003318786621

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00017404556274414

SELECT *
FROM `ospos_employees`
JOIN `ospos_people` ON `ospos_people`.`person_id` = `ospos_employees`.`person_id`
WHERE `ospos_employees`.`person_id` = '1' 
 Execution Time:0.00021696090698242

SELECT `cash_up`.`cashup_id`, MAX(cash_up.open_date) AS open_date, MAX(cash_up.close_date) AS close_date, MAX(cash_up.open_amount_cash) AS open_amount_cash, MAX(cash_up.transfer_amount_cash) AS transfer_amount_cash, MAX(cash_up.closed_amount_cash) AS closed_amount_cash, MAX(cash_up.closed_amount_due) AS closed_amount_due, MAX(cash_up.closed_amount_card) AS closed_amount_card, MAX(cash_up.closed_amount_check) AS closed_amount_check, MAX(cash_up.closed_amount_total) AS closed_amount_total, MAX(cash_up.description) AS description, MAX(cash_up.note) AS note, MAX(cash_up.open_employee_id) AS open_employee_id, MAX(cash_up.close_employee_id) AS close_employee_id, MAX(open_employees.first_name) AS open_first_name, MAX(open_employees.last_name) AS open_last_name, MAX(close_employees.first_name) AS close_first_name, MAX(close_employees.last_name) AS close_last_name
FROM `ospos_cash_up` AS `cash_up`
LEFT JOIN `ospos_people` AS `open_employees` ON `open_employees`.`person_id` = `cash_up`.`open_employee_id`
LEFT JOIN `ospos_people` AS `close_employees` ON `close_employees`.`person_id` = `cash_up`.`close_employee_id`
WHERE   (
`cash_up`.`open_date` LIKE '%%' ESCAPE '!'
OR  `open_employees`.`first_name` LIKE '%%' ESCAPE '!'
OR  `open_employees`.`last_name` LIKE '%%' ESCAPE '!'
OR  `close_employees`.`first_name` LIKE '%%' ESCAPE '!'
OR  `close_employees`.`last_name` LIKE '%%' ESCAPE '!'
OR  `cash_up`.`closed_amount_total` LIKE '%%' ESCAPE '!'
OR  CONCAT(open_employees.first_name, " ", open_employees.last_name) LIKE '%%' ESCAPE '!'
OR  CONCAT(close_employees.first_name, " ", close_employees.last_name) LIKE '%%' ESCAPE '!'
 )
AND `cash_up`.`deleted` = 0
AND DATE_FORMAT(cash_up.open_date, "%Y-%m-%d") BETWEEN '2021-02-20' AND '2021-02-20'
GROUP BY `cashup_id`
 LIMIT 25 
 Execution Time:0.0001978874206543

SELECT COUNT(cash_up.cashup_id) as count, `cash_up`.`cashup_id`, MAX(cash_up.open_date) AS open_date, MAX(cash_up.close_date) AS close_date, MAX(cash_up.open_amount_cash) AS open_amount_cash, MAX(cash_up.transfer_amount_cash) AS transfer_amount_cash, MAX(cash_up.closed_amount_cash) AS closed_amount_cash, MAX(cash_up.closed_amount_due) AS closed_amount_due, MAX(cash_up.closed_amount_card) AS closed_amount_card, MAX(cash_up.closed_amount_check) AS closed_amount_check, MAX(cash_up.closed_amount_total) AS closed_amount_total, MAX(cash_up.description) AS description, MAX(cash_up.note) AS note, MAX(cash_up.open_employee_id) AS open_employee_id, MAX(cash_up.close_employee_id) AS close_employee_id, MAX(open_employees.first_name) AS open_first_name, MAX(open_employees.last_name) AS open_last_name, MAX(close_employees.first_name) AS close_first_name, MAX(close_employees.last_name) AS close_last_name
FROM `ospos_cash_up` AS `cash_up`
LEFT JOIN `ospos_people` AS `open_employees` ON `open_employees`.`person_id` = `cash_up`.`open_employee_id`
LEFT JOIN `ospos_people` AS `close_employees` ON `close_employees`.`person_id` = `cash_up`.`close_employee_id`
WHERE   (
`cash_up`.`open_date` LIKE '%%' ESCAPE '!'
OR  `open_employees`.`first_name` LIKE '%%' ESCAPE '!'
OR  `open_employees`.`last_name` LIKE '%%' ESCAPE '!'
OR  `close_employees`.`first_name` LIKE '%%' ESCAPE '!'
OR  `close_employees`.`last_name` LIKE '%%' ESCAPE '!'
OR  `cash_up`.`closed_amount_total` LIKE '%%' ESCAPE '!'
OR  CONCAT(open_employees.first_name, " ", open_employees.last_name) LIKE '%%' ESCAPE '!'
OR  CONCAT(close_employees.first_name, " ", close_employees.last_name) LIKE '%%' ESCAPE '!'
 )
AND `cash_up`.`deleted` = 0
AND DATE_FORMAT(cash_up.open_date, "%Y-%m-%d") BETWEEN '2021-02-20' AND '2021-02-20'
GROUP BY `cashup_id` 
 Execution Time:0.00019097328186035

SELECT GET_LOCK('8fedf79a7eac256b6b5ce2c49883f7f3', 300) AS ci_session_lock 
 Execution Time:0.00031900405883789

SELECT `data`
FROM `ospos_sessions`
WHERE `id` = 'dvnfjt6n9vc7ooid2bsncjtraj2u28j0'
AND `ip_address` = '34.86.35.187' 
 Execution Time:0.0021378993988037

SHOW TABLES FROM `ospos` 
 Execution Time:0.0010020732879639

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00026202201843262

SELECT *
FROM `ospos_app_config`
ORDER BY `key` ASC 
 Execution Time:0.00029706954956055

SELECT `version`
FROM `ospos_migrations` 
 Execution Time:0.00031900405883789

