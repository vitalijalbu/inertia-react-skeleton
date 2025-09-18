import React, { useState, useEffect } from "react";
import { Row, Col, Card, Button, Avatar, Typography } from "antd";
const { Text, Title } = Typography;
const { Meta } = Card;
import PageActions from "@/shared/components/page-actions";
import {
    Icon123,
    IconUserFilled,
} from "@tabler/icons-react";
import { Link } from "@inertiajs/react";

const navLinks = [
    {
        label: "Accounts",
        description: "Account reports overview",
        icon: <IconUserFilled />,
        url: "/accounts",
    },
    {
        label: "Cutting waste",
        description: "Cutting waste reports overview",
        icon: <Icon123 />,
        url: "/reports/cutting/waste",
    },
];


const Index = (props) => {
    //const { items, categories, sports, brands } = props;
    console.log("Index props", props);
    return (
        <div className="page">
            <PageActions title="Dashboard" />
            <div className="page-content">
                <div className="container">
                    <Row gutter={[16, 16]}>
                    {navLinks.map((item, i) => (
                        <Col span={4} xl={6} lg={6} md={4} sm={24} xs={24} key={i}>
                            <Card>
                                <Link href={item.url}>
                                    <Meta
                                        avatar={<Avatar size="small">{item.icon}</Avatar>}
                                        title={item.label}
                                        description={item.description}
                                    />
                                </Link>
                            </Card>
                        </Col>

                    ))}
                    </Row>
                </div>
            </div>
        </div>
    );
};

export default Index;
