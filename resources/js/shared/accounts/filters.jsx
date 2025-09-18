import React from "react";
import { Row, Col, Form, Input, Button } from "antd";
import { IconSearch } from "@tabler/icons-react";

const Filters = () => {

    return (
        <section className="w-100">
            <Row>
                <Col span={24}>
                    <Form layout="none" className="w-100">
                        <Form.Item>
                            <Input.Search allowClear placeholder="Search"/>
                        </Form.Item>
                    </Form>
                </Col>
            </Row>
        </section>
    );
};

export default Filters;