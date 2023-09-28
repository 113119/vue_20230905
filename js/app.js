const express = require('express');
const bodyParser = require('body-parser');
const app = express();

// 使用body-parser中间件来解析JSON请求体
app.use(bodyParser.json());

// 购物车数组，用于存储已添加的商品
const cart = [];

// 添加商品到购物车
app.post('/api/addToCart', (req, res) => {
    const { name, price } = req.body;
    cart.push({ name, price });
    res.json({ message: '商品已添加到购物车', cart });
});

// 结账
app.post('/api/checkout', (req, res) => {
    // 在这里处理结账逻辑，例如生成订单、付款等
    const totalPrice = cart.reduce((total, item) => total + item.price, 0);
    cart.length = 0; // 清空购物车
    res.json({ message: '谢谢购买！总金额: $' + totalPrice });
});

const port = process.env.PORT || 3000;
app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
