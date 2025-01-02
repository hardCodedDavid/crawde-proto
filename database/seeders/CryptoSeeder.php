<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CryptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $sql = "INSERT INTO `cryptos` 
        (`id`, `symbol`, `name`, `img`, `price`, `changes_percentage`, `change`, `day_low`, 
        `day_high`, `year_low`, `year_high`, `market_cap`, `price_avg_50`, `price_avg_200`, 
        `exchange`, `volume`, `avg_volume`, `open`, `previous_close`, `eps`, `pe`, `status`, `tradeable`, 
        `created_at`, `updated_at`) 
        VALUES
        (1, 'BTCUSD', 'Bitcoin', 'https://cryptologos.cc/logos/bitcoin-btc-logo.png', 93718.27, 0.1749, 163.65, 93030.11, 94371.00, 38521.90, 108268.45, 1855917895733, 95799.3360, 71130.3050, 'NASDAQ', 36527438511, 55926380535, 93554.62, 93554.62, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (2, 'ETHUSD', 'Ethereum', 'https://cryptologos.cc/logos/ethereum-eth-logo.png', 3413.62, 1.9046, 63.80, 3349.82, 3438.00, 2113.93, 4106.96, 411241395751, 3510.5073, 2988.3313, 'NASDAQ', 17758564352, 29080975389, 3349.82, 3349.82, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (3, 'USDTUSD', 'Tether (USDT)', 'https://cryptologos.cc/logos/tether-usdt-logo.png', 1.00, 0.0050, 0.00, 1.00, 1.00, 1.00, 1.00, 138702965287, 1.0003, 1.0000, 'NASDAQ', 63582743520, 122627595685, 1.00, 1.00, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (4, 'BNBUSD', 'Binance Coin', 'https://cryptologos.cc/logos/binance-coin-bnb-logo.png', 695.05, 0.1922, 1.33, 692.15, 701.22, 287.73, 793.35, 100091850261, 671.0234, 588.8032, 'NASDAQ', 816320647, 2179304305, 693.71, 693.71, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (5, 'XRPUSD', 'XRP (Ripple)', 'https://cryptologos.cc/logos/xrp-xrp-logo.png', 2.07, -0.9072, -0.02, 2.04, 2.16, 0.39, 2.86, 119074554359, 1.8331, 0.8656, 'NASDAQ', 4475038720, 8106209656, 2.09, 2.09, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (6, 'ADAUSD', 'Cardano', 'https://cryptologos.cc/logos/cardano-ada-logo.png', 0.87, 1.2093, 0.01, 0.86, 0.90, 0.28, 1.32, 30529613898, 0.9413, 0.5119, 'NASDAQ', 858960921, 1592640680, 0.86, 0.86, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (7, 'SOLUSD', 'Solana', 'https://cryptologos.cc/logos/solana-sol-logo.png', 192.89, 1.6606, 3.15, 189.16, 194.26, 79.07, 263.83, 92536388145, 221.5311, 168.2779, 'NASDAQ', 2934660220, 4729422986, 189.74, 189.74, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (8, 'DOTUSD', 'Polkadot', 'https://cryptologos.cc/logos/polkadot-new-dot-logo.png', 6.87, 0.1581, 0.01, 6.84, 7.10, 3.65, 11.88, 10540682647, 7.7172, 5.6074, 'NASDAQ', 243629789, 574410843, 6.86, 6.86, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (9, 'LTCUSD', 'Litecoin', 'https://cryptologos.cc/logos/litecoin-ltc-logo.png', 102.00, 3.7725, 3.71, 98.20, 102.60, 50.43, 146.61, 7687034160, 104.3068, 77.0280, 'NASDAQ', 460855744, 860025591, 98.29, 98.29, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (10, 'DOGEUSD', 'Dogecoin', 'https://cryptologos.cc/logos/dogecoin-doge-logo.png', 0.32, 2.1383, 0.01, 0.31, 0.32, 0.07, 0.48, 47316611654, 0.3806, 0.1848, 'NASDAQ', 2258256348, 6022976594, 0.31, 0.31, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (11, 'AVAXUSD', 'Avalanche', 'https://cryptologos.cc/logos/avalanche-avax-logo.png', 36.80, 2.7282, 0.98, 35.73, 37.11, 17.49, 65.25, 15083432090, 42.1017, 29.8711, 'NASDAQ', 373978147, 757101910, 35.82, 35.82, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (12, 'MATICUSD', 'Polygon (MATIC)', 'https://cryptologos.cc/logos/polygon-matic-logo.png', 0.47, 1.1659, 0.01, 0.46, 0.48, 0.29, 1.29, 900626600, 0.5332, 0.4661, 'NASDAQ', 5662576, 19533418, 0.47, 0.47, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (13, 'UNIUSD', 'Uniswap', 'https://cryptologos.cc/logos/uniswap-uni-logo.png', 13.34, 2.6271, 0.34, 12.98, 13.57, 4.72, 19.39, 8011645147, 13.0077, 8.8922, 'NASDAQ', 303128812, 498963541, 13.00, 13.00, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (14, 'SHIBUSD', 'Shiba Inu', 'https://cryptologos.cc/logos/shiba-inu-shib-logo.png', 0.00, 1.3306, 0.00, 0.00, 0.00, 0.00, 0.00, 12733809629, 0.0000, 0.0000, 'NASDAQ', 435131507, 1273672862, 0.00, 0.00, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (15, 'ATOMUSD', 'Cosmos', 'https://cryptologos.cc/logos/cosmos-atom-logo.png', 6.41, 1.8731, 0.12, 6.27, 6.53, 3.64, 14.48, 2504793657, 7.5984, 5.7966, 'NASDAQ', 129990448, 275402756, 6.29, 6.29, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-11-04 23:17:02'),
        (16, 'TRXUSD', 'Tron', 'https://cryptologos.cc/logos/tron-trx-logo.png', 0.26, 0.1526, 0.00, 0.26, 0.26, 0.10, 0.44, 22213016395, 0.2410, 0.1681, 'NASDAQ', 790894124, 1104953894, 0.26, 0.26, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (17, 'LINKUSD', 'Chainlink', 'https://cryptologos.cc/logos/chainlink-link-logo.png', 21.23, 1.3859, 0.29, 20.87, 21.79, 8.14, 30.81, 13545586121, 20.7057, 14.1688, 'NASDAQ', 690794463, 953654913, 20.94, 20.94, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (18, 'AAVEUSD', 'Aave', 'https://cryptologos.cc/logos/aave-aave-logo.png', 335.52, 1.0654, 3.54, 331.50, 344.11, 72.26, 399.07, 5043684940, 255.8016, 155.9612, 'NASDAQ', 574085373, 502309110, 331.98, 331.98, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (19, 'BCHUSD', 'Bitcoin Cash', 'https://cryptologos.cc/logos/bitcoin-cash-bch-logo.png', 447.42, 2.0442, 8.96, 437.63, 451.13, 219.32, 714.06, 8862868508, 497.2128, 390.6088, 'NASDAQ', 197399692, 570351534, 438.46, 438.46, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (20, 'XLMUSD', 'Stellar', 'https://cryptologos.cc/logos/stellar-xlm-logo.png', 0.34, -0.7632, 0.00, 0.33, 0.35, 0.08, 0.63, 10151665853, 0.3723, 0.1646, 'NASDAQ', 223210762, 1053754836, 0.34, 0.34, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (21, 'FILUSD', 'Filecoin', 'https://cryptologos.cc/logos/filecoin-fil-logo.png', 5.02, 1.3112, 0.06, 4.94, 5.18, 2.90, 11.81, 3093764436, 5.6861, 4.3602, 'NASDAQ', 217073217, 400910893, 4.95, 4.95, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (22, 'NEARUSD', 'Near Protocol', 'https://cryptologos.cc/logos/near-protocol-near-logo.png', 5.19, 1.2847, 0.07, 5.11, 5.28, 2.46, 8.99, 6060455954, 6.2032, 5.0912, 'NASDAQ', 231134029, 610064437, 5.13, 5.13, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (23, 'ALGOUSD', 'Algorand', 'https://cryptologos.cc/logos/algorand-algo-logo.png', 0.33, 1.1379, 0.00, 0.32, 0.34, 0.10, 0.60, 2742233213, 0.3379, 0.1827, 'NASDAQ', 163972914, 345670684, 0.33, 0.33, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (24, 'ICPUSD', 'Internet Computer', 'https://cryptologos.cc/logos/internet-computer-icp-logo.png', 10.32, 1.6921, 0.17, 10.10, 10.60, 5.88, 20.90, 4933059849, 11.3303, 8.9778, 'NASDAQ', 140168596, 191461049, 10.15, 10.15, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (25, 'SANDUSD', 'The Sandbox', 'https://cryptologos.cc/logos/the-sandbox-sand-logo.png', 0.55, 0.8724, 0.00, 0.55, 0.57, 0.21, 1.06, 1343291698, 0.5892, 0.3598, 'NASDAQ', 106545142, 450607636, 0.55, 0.55, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (26, 'MKRUSD', 'Maker', 'https://cryptologos.cc/logos/maker-mkr-logo.png', 1518.28, 0.8841, 13.31, 1460.90, 1549.90, 197.77, 4064.84, 1353933781, 1752.8956, 1873.8491, 'NASDAQ', 111063271, 128384783, 1504.97, 1504.97, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (27, 'ZILUSD', 'Zilliqa', 'https://cryptologos.cc/logos/zilliqa-zil-logo.png', 0.02, 1.9992, 0.00, 0.02, 0.02, 0.01, 0.04, 411841134, 0.0243, 0.0175, 'NASDAQ', 28360096, 49797391, 0.02, 0.02, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (28, 'GRTUSD', 'The Graph', 'https://cryptologos.cc/logos/the-graph-grt-logo.png', 0.21, 1.1879, 0.00, 0.21, 0.22, 0.11, 0.49, 1998507687, 0.2461, 0.1900, 'NASDAQ', 67939261, 114270855, 0.21, 0.21, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (29, 'ENJUSD', 'Enjin Coin', 'https://cryptologos.cc/logos/enjin-coin-enj-logo.png', 0.22, 1.1656, 0.00, 0.22, 0.23, 0.12, 0.69, 396320033, 0.2580, 0.1852, 'NASDAQ', 18921639, 36228166, 0.22, 0.22, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (30, 'CHZUSD', 'Chiliz', 'https://cryptologos.cc/logos/chiliz-chz-logo.png', 0.09, 1.3960, 0.00, 0.08, 0.09, 0.04, 0.17, 782577249, 0.0944, 0.0725, 'NASDAQ', 82854907, 152428823, 0.08, 0.08, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (31, 'MANAUSD', 'Decentraland', 'https://cryptologos.cc/logos/decentraland-mana-logo.png', 0.49, 0.9349, 0.00, 0.48, 0.50, 0.22, 0.85, 946072524, 0.5440, 0.3643, 'NASDAQ', 1078, 161216105, 0.48, 0.48, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (32, 'COMPUSD', 'Compound', 'https://cryptologos.cc/logos/compound-comp-logo.png', 78.64, 1.7441, 1.35, 77.07, 80.02, 33.96, 139.17, 697165383, 79.5063, 54.5603, 'NASDAQ', 39784638, 68781941, 77.29, 77.29, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (33, 'ZRXUSD', '0x', 'https://cryptologos.cc/logos/0x-zrx-logo.png', 0.47, 1.8046, 0.01, 0.46, 0.49, 0.23, 1.43, 402960107, 0.5201, 0.3760, 'NASDAQ', 43425083, 83655327, 0.47, 0.47, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (34, 'BALUSD', 'Balancer', 'https://cryptologos.cc/logos/balancer-bal-logo.png', 2.58, 1.2417, 0.03, 2.54, 2.62, 1.56, 6.16, 158330370, 2.8116, 2.3767, 'NASDAQ', 11364212, 12056730, 2.54, 2.54, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (35, 'DGBUSD', 'DigiByte', 'https://cryptologos.cc/logos/digibyte-dgb-logo.png', 0.01, -1.1078, 0.00, 0.01, 0.01, 0.00, 0.02, 202474584, 0.0125, 0.0084, 'NASDAQ', 4491143, 13659696, 0.01, 0.01, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (36, 'CELUSD', 'Celsius', 'https://cryptologos.cc/logos/celsius-cel-logo.png', 0.19, 0.7652, 0.00, 0.19, 0.20, 0.12, 2.05, 7298691, 0.2359, 0.3438, 'NASDAQ', 669101, 1283522, 0.19, 0.19, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (37, 'WAVESUSD', 'Waves', 'https://cryptologos.cc/logos/waves-waves-logo.png', 1.62, -4.4736, -0.08, 1.60, 1.70, 0.76, 4.96, 188820831, 1.7210, 1.2275, 'NASDAQ', 59842515, 50814545, 1.70, 1.70, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (38, 'KNCUSD', 'Kyber Network', 'https://cryptologos.cc/logos/kyber-network-knc-logo.png', 0.56, 3.6460, 0.02, 0.54, 0.59, 0.36, 1.14, 104763396, 0.6208, 0.5178, 'NASDAQ', 20038002, 17341107, 0.54, 0.54, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (39, '1INCHUSD', '1inch', 'https://cryptologos.cc/logos/1inch-1inch-logo.png', 0.40, 1.7930, 0.01, 0.39, 0.41, 0.21, 0.70, 557899758, 0.4103, 0.3335, 'NASDAQ', 53896369, 64346296, 0.39, 0.39, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (40, 'HNTUSD', 'Helium', 'https://cryptologos.cc/logos/helium-hnt-logo.png', 6.35, -2.8957, -0.19, 6.34, 6.83, 2.87, 11.04, 1115876294, 7.1741, 6.1618, 'NASDAQ', 19291945, 27085095, 6.54, 6.54, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (41, 'OMGUSD', 'OMG Network', 'https://cryptologos.cc/logos/omg-network-omg-logo.png', 0.33, 1.6377, 0.01, 0.32, 0.34, 0.17, 1.40, 46410935, 0.3988, 0.3022, 'NASDAQ', 6307795, 9684928, 0.33, 0.33, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (42, 'CRVUSD', 'Curve DAO Token', 'https://cryptologos.cc/logos/curve-dao-token-crv-logo.png', 0.95, 0.3678, 0.00, 0.94, 1.00, 0.18, 1.33, 1199226399, 0.7444, 0.3960, 'NASDAQ', 383645542, 323773482, 0.95, 0.95, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (43, 'RENUSD', 'Ren', 'https://cryptologos.cc/logos/ren-ren-logo.png', 0.03, -16.6877, -0.01, 0.03, 0.04, 0.03, 0.12, 31819253, 0.0422, 0.0415, 'NASDAQ', 1645400, 16544333, 0.04, 0.04, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (44, 'BANDUSD', 'Band Protocol', 'https://cryptologos.cc/logos/band-protocol-band-logo.png', 1.46, 1.3090, 0.02, 1.44, 1.50, 0.89, 2.83, 227069282, 1.6217, 1.2789, 'NASDAQ', 7288322, 11483710, 1.45, 1.45, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (45, 'LRCUSD', 'Loopring', 'https://cryptologos.cc/logos/loopring-lrc-logo.png', 0.20, 2.2097, 0.00, 0.20, 0.21, 0.10, 0.55, 277055328, 0.2220, 0.1592, 'NASDAQ', 17267630, 33239324, 0.20, 0.20, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (46, 'STORJUSD', 'Storj', 'https://cryptologos.cc/logos/storj-storj-logo.png', 0.48, -2.0618, -0.01, 0.48, 0.51, 0.26, 0.94, 193363535, 0.5554, 0.4425, 'NASDAQ', 38501947, 49780739, 0.49, 0.49, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (47, 'ANKRUSD', 'Ankr', 'https://cryptologos.cc/logos/ankr-ankr-logo.png', 0.04, 1.7036, 0.00, 0.03, 0.04, 0.02, 0.07, 353900000, 0.0400, 0.0305, 'NASDAQ', 20041396, 25544495, 0.03, 0.03, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (48, 'SNXUSD', 'Synthetix', 'https://cryptologos.cc/logos/synthetix-snx-logo.png', 2.02, 0.7165, 0.01, 2.00, 2.10, 1.09, 5.28, 686297441, 2.3079, 1.7600, 'NASDAQ', 31026104, 52283986, 2.01, 2.01, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (49, 'LPTUSD', 'Livepeer', 'https://cryptologos.cc/logos/livepeer-lpt-logo.png', 15.62, -2.5514, -0.41, 15.56, 16.28, 5.99, 27.28, 576884588, 14.7871, 13.8451, 'NASDAQ', 82879472, 74957288, 16.03, 16.03, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (50, 'EGLDUSD', 'MultiversX (Elrond)', 'https://cryptologos.cc/logos/multiversx-egld-logo.png', 35.19, 3.0579, 1.04, 33.97, 35.60, 21.51, 77.80, 974992720, 39.2468, 31.3759, 'NASDAQ', 33012236, 50548533, 34.15, 34.15, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (51, 'FTTUSD', 'FTX Token', 'https://cryptologos.cc/logos/ftx-token-ftt-logo.png', 3.56, -2.6999, -0.10, 3.54, 3.78, 1.01, 4.23, 1171040095, 2.6381, 1.8054, 'NASDAQ', 108491353, 59450177, 3.66, 3.66, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (52, 'HBARUSD', 'Hedera', 'https://cryptologos.cc/logos/hedera-hbar-logo.png', 0.28, 0.2522, 0.00, 0.28, 0.29, 0.04, 0.39, 10695304795, 0.2136, 0.0982, 'NASDAQ', 537722240, 858042648, 0.28, 0.28, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (53, 'GALAUSD', 'Gala', 'https://cryptologos.cc/logos/gala-gala-logo.png', 0.04, 1.4256, 0.00, 0.03, 0.04, 0.01, 0.84, 1289362866, 0.0636, 0.1966, 'NASDAQ', 144441621, 298639081, 0.03, 0.03, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (54, 'ARUSD', 'Arweave', 'https://cryptologos.cc/logos/arweave-ar-logo.png', 16.26, 0.5999, 0.10, 16.12, 16.76, 7.58, 49.42, 1067795309, 20.6380, 22.1927, 'NASDAQ', 69180186, 140722413, 16.17, 16.17, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (55, 'CSPRUSD', 'Casper', 'https://cryptologos.cc/logos/casper-cspr-logo.png', 0.02, 1.9322, 0.00, 0.02, 0.02, 0.01, 0.06, 198769183, 0.0168, 0.0154, 'NASDAQ', 8513344, 20439075, 0.02, 0.02, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (56, 'XECUSD', 'eCash', 'https://cryptologos.cc/logos/ecash-xec-logo.png', 0.00, 1.6881, 0.00, 0.00, 0.00, 0.00, 0.00, 689586301, 0.0000, 0.0000, 'NASDAQ', 18374599, 45127913, 0.00, 0.00, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (57, 'RSRUSD', 'Reserve Rights', 'https://cryptologos.cc/logos/reserve-rights-rsr-logo.png', 0.01, 1.7265, 0.00, 0.01, 0.01, 0.00, 0.03, 777281279, 0.0117, 0.0072, 'NASDAQ', 68452761, 83249150, 0.01, 0.01, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (58, 'NEXOUSD', 'Nexo', 'https://cryptologos.cc/logos/nexo-nexo-logo.png', 1.34, 0.2967, 0.00, 1.33, 1.36, 0.77, 1.58, 865835447, 1.3666, 1.1488, 'NASDAQ', 7253719, 8342206, 1.34, 1.34, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (59, 'SCRTUSD', 'Secret', 'https://cryptologos.cc/logos/secret-scrt-logo.png', 0.50, 0.9322, 0.00, 0.48, 0.53, 0.16, 0.86, 148229972, 0.4744, 0.2911, 'NASDAQ', 29820938, 20041576, 0.49, 0.49, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (60, 'DENTUSD', 'Dent', 'https://cryptologos.cc/logos/dent-dent-logo.png', 0.00, 2.1207, 0.00, 0.00, 0.00, 0.00, 0.00, 125076997, 0.0014, 0.0010, 'NASDAQ', 5463991, 8264619, 0.00, 0.00, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (61, 'KEEPUSD', 'Keep Network', 'https://cryptologos.cc/logos/keep-network-keep-logo.png', 0.12, 1.5755, 0.00, 0.12, 0.13, 0.07, 0.31, 117813125, 0.1404, 0.1155, 'NASDAQ', 17032, 22694, 0.12, 0.12, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (62, 'BTGUSD', 'Bitcoin Gold', 'https://cryptologos.cc/logos/bitcoin-gold-btg-logo.png', 9.65, -1.7291, -0.17, 9.60, 9.92, 9.21, 69.84, 169037634, 27.5106, 24.6321, 'NASDAQ', 23378355, 40801649, 9.82, 9.82, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (63, 'CVCUSD', 'Civic', 'https://cryptologos.cc/logos/civic-cvc-logo.png', 0.19, -4.1630, -0.01, 0.19, 0.20, 0.07, 0.32, 193100000, 0.1660, 0.1263, 'NASDAQ', 66251032, 63502846, 0.20, 0.20, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (64, 'CFXUSD', 'Conflux', 'https://cryptologos.cc/logos/conflux-cfx-logo.png', 0.16, 1.1956, 0.00, 0.16, 0.16, 0.10, 0.55, 755419931, 0.1864, 0.1607, 'NASDAQ', 61825551, 85469448, 0.16, 0.16, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (65, 'PLAUSD', 'PlayDapp', 'https://cryptologos.cc/logos/playdapp-pla-logo.png', 0.04, -76.7549, -0.15, 0.04, 0.05, 0.04, 0.11, 25918706, 0.0493, 0.0542, 'NASDAQ', 5916858, 18285578, 0.19, 0.19, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (66, 'ZENUSD', 'Horizen', 'https://cryptologos.cc/logos/horizen-zen-logo.png', 28.17, -4.9273, -1.46, 27.87, 30.03, 6.03, 46.00, 444622346, 16.5504, 10.3936, 'NASDAQ', 95724072, 55331482, 29.63, 29.63, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (67, 'XNOUSD', 'Nano', 'https://cryptologos.cc/logos/nano-xno-logo.png', 1.38, -1.8214, -0.03, 1.38, 1.48, 0.67, 2.41, 184050301, 1.4255, 1.0221, 'NASDAQ', 1407005, 3196006, 1.41, 1.41, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (68, 'QNTUSD', 'Quant', 'https://cryptologos.cc/logos/quant-qnt-logo.png', 112.49, -1.0037, -1.14, 112.44, 117.45, 50.47, 171.15, 1358062298, 109.8914, 79.4650, 'NASDAQ', 30077456, 40794658, 113.63, 113.63, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (69, 'STMXUSD', 'StormX', 'https://cryptologos.cc/logos/stormx-stmx-logo.png', 0.01, 3.4766, 0.00, 0.01, 0.01, 0.00, 0.01, 77992876, 0.0070, 0.0061, 'NASDAQ', 18801815, 22485319, 0.01, 0.01, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (70, 'BNTUSD', 'Bancor', 'https://cryptologos.cc/logos/bancor-bnt-logo.png', 0.68, 0.9291, 0.01, 0.67, 0.69, 0.39, 1.06, 80975722, 0.7410, 0.5858, 'NASDAQ', 1375961, 8635879, 0.67, 0.67, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (71, 'SXPUSD', 'Solar (SXP)', 'https://cryptologos.cc/logos/solar-sxp-logo.png', 0.38, 27.8589, 0.08, 0.30, 0.40, 0.17, 0.57, 239011925, 0.3681, 0.2709, 'NASDAQ', 284326752, 48716705, 0.30, 0.30, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (72, 'PAXUSD', 'Paxos Standard', 'https://cryptologos.cc/logos/paxos-standard-pax-logo.png', 1.00, 0.0282, 0.00, 1.00, 1.00, 0.96, 1.44, 93477696, 1.0000, 1.0004, 'NASDAQ', 4398110, 2057349, 1.00, 1.00, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (73, 'TRIBEUSD', 'Tribe', 'https://cryptologos.cc/logos/tribe-tribe-logo.png', 0.65, 3.7170, 0.02, 0.62, 0.65, 0.22, 0.70, 350776538, 0.6019, 0.4870, 'NASDAQ', 67907, 73691, 0.62, 0.62, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (74, 'LUNAUSD', 'Terra Classic (LUNA)', 'https://cryptologos.cc/logos/terra-luna-luna-logo.png', 0.43, 0.6788, 0.00, 0.42, 0.44, 0.25, 1.52, 304061845, 0.4983, 0.4084, 'NASDAQ', 27122334, 73063395, 0.43, 0.43, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (75, 'VETUSD', 'VeChain', 'https://cryptologos.cc/logos/vechain-vet-logo.png', 0.05, 0.2686, 0.00, 0.04, 0.05, 0.02, 0.08, 3657284354, 0.0463, 0.0298, 'NASDAQ', 50003063, 127719904, 0.05, 0.05, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (76, 'SLPUSD', 'Smooth Love Potion', 'https://cryptologos.cc/logos/smooth-love-potion-slp-logo.png', 0.00, -0.4565, 0.00, 0.00, 0.00, 0.00, 0.01, 153930497, 0.0040, 0.0030, 'NASDAQ', 11439382, 26312086, 0.00, 0.00, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (77, 'CELOUSD', 'Celo', 'https://cryptologos.cc/logos/celo-celo-logo.png', 0.87, 8.9400, 0.07, 0.82, 0.88, 0.36, 1.80, 0, 0.5101, 0.7924, 'NASDAQ', 2326, 14671, 0.84, 0.80, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (78, 'UOSUSD', 'Ultra', 'https://cryptologos.cc/logos/ultra-uos-logo.png', 0.09, -1.4160, 0.00, 0.09, 0.09, 0.07, 0.40, 36019333, 0.0993, 0.0937, 'NASDAQ', 555807, 1039979, 0.09, 0.09, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (79, 'FLOWUSD', 'Flow', 'https://cryptologos.cc/logos/flow-flow-logo.png', 0.73, 3.3104, 0.02, 0.70, 0.74, 0.45, 1.69, 1133253576, 0.8441, 0.6424, 'NASDAQ', 66558725, 83869257, 0.71, 0.71, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (80, 'MLNUSD', 'Enzyme', 'https://cryptologos.cc/logos/enzyme-mln-logo.png', 20.38, -0.2543, -0.05, 20.36, 23.33, 12.72, 34.58, 54353990, 19.6198, 17.6651, 'NASDAQ', 4387185, 7207204, 20.43, 20.43, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (81, 'SPELLUSD', 'Spell Token', 'https://cryptologos.cc/logos/spell-token-spell-logo.png', 0.00, 1.4054, 0.00, 0.00, 0.00, 0.00, 0.00, 115855614, 0.0009, 0.0007, 'NASDAQ', 5880329, 20888571, 0.00, 0.00, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (82, 'TRUUSD', 'TrueFi', 'https://cryptologos.cc/logos/truefi-tru-logo.png', 0.09, 2.5792, 0.00, 0.09, 0.09, 0.04, 0.24, 113874587, 0.1068, 0.1044, 'NASDAQ', 10450889, 20204393, 0.09, 0.09, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (83, 'XVGUSD', 'Verge', 'https://cryptologos.cc/logos/verge-xvg-logo.png', 0.01, 1.6902, 0.00, 0.01, 0.01, 0.00, 0.02, 229926660, 0.0104, 0.0055, 'NASDAQ', 47585394, 45990526, 0.01, 0.01, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (84, 'GODSUSD', 'Gods Unchained', 'https://cryptologos.cc/logos/gods-unchained-gods-logo.png', 0.21, 2.8560, 0.01, 0.20, 0.21, 0.13, 0.54, 71216934, 0.2289, 0.2036, 'NASDAQ', 1093393, 2189262, 0.20, 0.20, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (85, 'COTIUSD', 'COTI', 'https://cryptologos.cc/logos/coti-coti-logo.png', 0.12, 0.5828, 0.00, 0.12, 0.13, 0.05, 0.28, 218124004, 0.1373, 0.1063, 'NASDAQ', 12085196, 25533571, 0.12, 0.12, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (86, 'SEROUSD', 'Super Zero', 'https://cryptologos.cc/logos/super-zero-sero-logo.png', 0.01, 0.4727, 0.00, 0.01, 0.01, 0.00, 0.05, 4387301, 0.0199, 0.0169, 'NASDAQ', 142659, 636766, 0.01, 0.01, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (87, 'FLOKIUSD', 'Floki Inu', 'https://cryptologos.cc/logos/floki-inu-floki-logo.png', 0.00, 3.4892, 0.00, 0.00, 0.00, 0.00, 0.00, 1699089117, 0.0002, 0.0002, 'NASDAQ', 206009871, 450599512, 0.00, 0.00, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (88, 'ALPHAUSD', 'Alpha Finance Lab', 'https://cryptologos.cc/logos/alpha-finance-lab-alpha-logo.png', 0.08, 1.1183, 0.00, 0.08, 0.09, 0.04, 0.21, 76615729, 0.0955, 0.0734, 'NASDAQ', 629675, 14972103, 0.08, 0.08, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (89, 'POLYUSD', 'Polymath', 'https://cryptologos.cc/logos/polymath-poly-logo.png', 0.07, 4.4886, 0.00, 0.07, 0.08, 0.03, 0.41, 67781691, 0.0644, 0.0768, 'NASDAQ', 7168, 9259, 0.07, 0.07, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (90, 'CLVUSD', 'Clover Finance', 'https://cryptologos.cc/logos/clover-finance-clv-logo.png', 0.07, 0.2267, 0.00, 0.06, 0.07, 0.02, 0.17, 79813989, 0.0760, 0.0509, 'NASDAQ', 9248617, 44587439, 0.07, 0.07, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (91, 'ERNUSD', 'Ethernity Chain', 'https://cryptologos.cc/logos/ethernity-chain-ern-logo.png', 2.72, -1.4649, -0.04, 2.72, 2.81, 1.50, 8.69, 64167371, 2.7491, 2.3457, 'NASDAQ', 6273681, 7003237, 2.76, 2.76, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (92, 'METISUSD', 'MetisDAO', 'https://cryptologos.cc/logos/metisdao-metis-logo.png', 44.37, 1.4974, 0.65, 43.46, 45.04, 25.82, 148.65, 272934690, 52.7617, 43.0374, 'NASDAQ', 7196802, 24046522, 43.72, 43.72, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (93, 'REEFUSD', 'Reef', 'https://cryptologos.cc/logos/reef-reef-logo.png', 0.00, 2.6439, 0.00, 0.00, 0.00, 0.00, 0.01, 24104657, 0.0014, 0.0019, 'NASDAQ', 1626966, 21812355, 0.00, 0.00, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (94, 'RSVUSD', 'Reserve', 'https://cryptologos.cc/logos/reserve-rsv-logo.png', 1.00, 0.0000, 0.00, 1.00, 1.00, 1.00, 1.94, 28809379, 0.9994, 1.0777, 'NASDAQ', 1, 0, 1.00, 1.00, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (95, 'MITHUSD', 'Mithril', 'https://cryptologos.cc/logos/mithril-mith-logo.png', 0.00, -19.1705, 0.00, 0.00, 0.00, 0.00, 0.00, 168700, 0.0002, 0.0003, 'NASDAQ', 1553, 1758, 0.00, 0.00, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (96, 'FTMUSD', 'Fantom', 'https://cryptologos.cc/logos/fantom-ftm-logo.png', 0.79, 1.0219, 0.01, 0.78, 0.81, 0.26, 1.47, 2212067971, 1.0073, 0.6566, 'NASDAQ', 353861544, 417766920, 0.78, 0.78, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (97, 'DYDXUSD', 'dYdX', 'https://cryptologos.cc/logos/dydx-dydx-logo.png', 1.59, 6.2969, 0.09, 1.49, 1.59, 0.81, 4.53, 1132658404, 1.6465, 1.2475, 'NASDAQ', 1072, 80725654, 1.50, 1.50, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (98, 'IMXUSD', 'ImmutableX', 'https://cryptologos.cc/logos/immutable-x-imx-logo.png', 1.39, 2.8321, 0.04, 1.34, 1.42, 0.92, 3.75, 2393413965, 1.6290, 1.4672, 'NASDAQ', 57603215, 93192516, 1.35, 1.35, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (99, 'SUSHIUSD', 'SushiSwap', 'https://cryptologos.cc/logos/sushiswap-sushi-logo.png', 1.41, 1.4066, 0.02, 1.39, 1.48, 0.45, 2.80, 371533203, 1.3886, 0.8698, 'NASDAQ', 88400084, 122866916, 1.40, 1.40, 0.00, 0.00, 'active', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17'),
        (100, 'ROSEUSD', 'Oasis Network', 'https://cryptologos.cc/logos/oasis-network-rose-logo.png', 0.09, 0.5576, 0.00, 0.09, 0.09, 0.05, 0.19, 638738870, 0.0978, 0.0799, 'NASDAQ', 40496594, 65317381, 0.09, 0.09, 0.00, 0.00, 'inactive', '1', '2024-10-08 15:19:17', '2024-10-08 15:19:17');
    ";

    // Process data and insert
    preg_match_all("/\(([^)]+)\)/", $sql, $matches);

    $fields = [
        'id', 'symbol', 'name', 'img', 'price', 'changes_percentage', 'change', 'day_low', 
        'day_high', 'year_low', 'year_high', 'market_cap', 'price_avg_50', 'price_avg_200', 
        'exchange', 'volume', 'avg_volume', 'open', 'previous_close', 'eps', 'pe', 
        'status', 'tradeable', 'created_at', 'updated_at'
    ];

    $cryptos = [];
    foreach ($matches[1] as $row) {
        // Match comma-separated values while respecting quotes
        preg_match_all("/'(.*?)'|([^,]+)/", $row, $values);
        $values = array_map(fn($value) => trim($value, "' "), $values[0]); // Clean values

        dump("Values extracted: ", $values);
        if (count($values) !== count($fields)) {
            dump("Field-value mismatch:", $values);
            continue;
        }

        $crypto = array_combine($fields, $values);
        $cryptos[] = $crypto;
    }

    // Insert data into the database
    foreach ($cryptos as $crypto) {
        DB::table('cryptos')->insert([
            'id' => Str::uuid()->toString(),
            'symbol' => $crypto['symbol'],
            'name' => $crypto['name'],
            'img' => $crypto['img'],
            'price' => (float)$crypto['price'], // Ensure price is a float
            'changes_percentage' => (float)$crypto['changes_percentage'],
            'change' => (float)$crypto['change'],
            'day_low' => (float)$crypto['day_low'],
            'day_high' => (float)$crypto['day_high'],
            'year_low' => (float)$crypto['year_low'],
            'year_high' => (float)$crypto['year_high'],
            'market_cap' => (float)$crypto['market_cap'],
            'price_avg_50' => (float)$crypto['price_avg_50'],
            'price_avg_200' => (float)$crypto['price_avg_200'],
            'exchange' => $crypto['exchange'],
            'volume' => (float)$crypto['volume'],
            'avg_volume' => (float)$crypto['avg_volume'],
            'open' => (float)$crypto['open'],
            'previous_close' => (float)$crypto['previous_close'],
            'eps' => (float)$crypto['eps'],
            'pe' => (float)$crypto['pe'],
            // Commenting out columns that may be irrelevant at the moment
            // 'status' => $crypto['status'],
            // 'tradeable' => $crypto['tradeable'],
            // 'created_at' => $crypto['created_at'],
            // 'updated_at' => $crypto['updated_at'],
        ]);
    }
}

}
